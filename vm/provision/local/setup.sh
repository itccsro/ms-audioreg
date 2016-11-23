#!/bin/bash

echo "Provisioning virtual machine..."
apt-get update
backend=/var/www/audioreg-admin-app
client_main=/var/www/audioreg-client-main
internal_api=/var/www/audioreg-internal-api
provision=/vagrant/provision/local
pg_version=9.5

echo "Installing application stack..."
export DEBIAN_FRONTEND=noninteractive
apt-get install -q -y apache2 libapache2-mod-php7.0 \
        php7.0-pgsql php-mbstring php-mcrypt php-xml \
        screen git htop \
        redis-server redis-tools php-redis libphp-predis libhiredis-dbg
a2enmod rewrite
a2enmod ssl
a2enmod headers

echo "Setting up PostgreSQL"
echo "Y" | apt-get install postgresql-client-common
echo "Y" | apt-get install postgresql-common

mkdir -p /etc/postgresql/$pg_version/main/conf.d
echo "include_dir = '/etc/postgresql/$pg_version/main/conf.d'" >> /etc/postgresql-common/createcluster.conf

echo "Y" | apt-get install postgresql
echo "Y" | apt-get install postgresql-client
echo "Y" | apt-get install postgresql-contrib

cp /var/www/audioreg-admin-app/provision/local/postgresql-audioreg-admin-app.conf /etc/postgresql/$pg_version/main/conf.d
chown -R postgres:postgres /etc/postgresql

echo "PGDATA=/var/lib/postgresql/$pg_version/main" >> ~postgres/.profile
echo "PATH=/usr/lib/postgresql/$pg_version/bin:$PATH" >> ~postgres/.profile
echo 'export PGDATA' >> ~postgres/.profile
chown postgres:postgres ~postgres/.profile

su - postgres -c "psql -f /var/www/audioreg-admin-app/provision/local/create_role_db.sql"
su - postgres -c "pg_ctl restart"

echo "Configuring virtual hosts..."
cp $backend/provision/local/apache2/sites-available/*.conf /etc/apache2/sites-available/
cp $client_main/provision/local/apache2/sites-available/*.conf /etc/apache2/sites-available/
cp $internal_api/provision/local/apache2/sites-available/*.conf /etc/apache2/sites-available/
cp $provision/apache.crt /etc/ssl/certs/
cp $provision/apache.key /etc/ssl/private/
a2dissite 000-default
a2ensite audioreg-admin-app
a2ensite ssl-audioreg-admin-app
service apache2 reload

# Allow requests from inside the machine
cat <<EOF >> /etc/hosts
127.0.0.1 localhost local.audioreg-admin-app
EOF

echo "Installing Composer..."
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
cd $backend/src && composer install
cd $client_main/src && composer install
cd $internal_api/src && composer install

echo "Installing Beanstalkd..."

# Install Beanstalkd
apt-get install -y beanstalkd
cp $provision/beanstalkd/beanstalkd /etc/default/beanstalkd
service beanstalkd restart

# Install Beanstalk console
mkdir /var/www/beanstalk_console
composer create-project ptrofimov/beanstalk_console --keep-vcs --stability dev /var/www/beanstalk_console
cp $provision/beanstalk_console/config.php /var/www/beanstalk_console/
chown -R www-data:www-data /var/www/beanstalk_console
cp $provision/apache2/sites-available/ssl-beanstalk_console.conf /etc/apache2/sites-available/
a2ensite ssl-beanstalk_console
service apache2 reload

echo "Configuring Laravel environment..."
cp $backend/provision/local/.env $backend/src/.env
cd $backend/src && php artisan migrate --seed

cp $client_main/provision/local/.env $client_main/src/.env
cp $internal_api/provision/local/.env $internal_api/src/.env

echo "Finished provisioning."
