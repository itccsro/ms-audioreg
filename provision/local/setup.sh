#!/bin/bash
echo "Provisioning virtual machine..."
# Update remote package metadata
apt-get update
locale-gen UTF-8
src=/var/www/audioreg/src
provision=/var/www/audioreg/provision/local

echo "Installing application stack..."
# Prevent getting a prompt for the MySQL root's password
export DEBIAN_FRONTEND=noninteractive
apt-get install -y \
    apache2 mysql-server mysql-client \
    libapache2-mod-php php-mcrypt php-mbstring php-curl php-mysql \
    screen git htop unzip \
    redis-server redis-tools
a2enmod rewrite
a2enmod ssl
a2enmod headers

echo "Configuring MySQL..."
cat $provision/database.sql | mysql -uroot

echo "Configuring virtual host..."
cp $provision/virtual-host.conf /etc/apache2/sites-available/audioreg.conf
a2ensite audioreg
a2dissite 000-default
service apache2 restart

echo "Installing Composer..."
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
cd $src && composer install
cd -

echo "Installing Xdebug..."
apt-get install -y php-dev
pecl install xdebug
cat <<EOF > /etc/php/7.0/mods-available/xdebug.ini
zend_extension=xdebug.so
xdebug.remote_enable=1
xdebug.remote_host=192.168.60.1
xdebug.var_display_max_data=4096
xdebug.var_display_max_depth=4
EOF
phpenmod xdebug
service apache2 reload

echo "Configuring Laravel environment..."
cp $provision/.env $src/.env

echo "Finished provisioning."
