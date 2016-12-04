const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    /********************/
    /* Copy Stylesheets */
    /********************/

    // Bootstrap
    mix.copy('node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');

    // Font awesome
    mix.copy('node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');

    // Gentelella
    mix.copy('node_modules/gentelella/build/css/custom.min.css', 'public/css/gentelella.min.css');

    //DataTables
    mix.copy('node_modules/datatables.net-bs/css/dataTables.bootstrap.css', 'public/css/dataTables.bootstrap.css');
    mix.copy('node_modules/datatables.net-buttons-bs/css/buttons.bootstrap.css', 'public/css/buttons.bootstrap.css');
    mix.copy('node_modules/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.css', 'public/css/fixedHeader.bootstrap.css');
    mix.copy('node_modules/datatables.net-responsive-bs/css/responsive.bootstrap.css', 'public/css/responsive.bootstrap.css');
    mix.copy('node_modules/datatables.net-scroller-bs/css/scroller.bootstrap.css', 'public/css/scroller.bootstrap.css');

    elixir(function(mix) {
        mix.styles([
            './public/css/dataTables.bootstrap.css',
            './public/css/buttons.bootstrap.css',
            './public/css/fixedHeader.bootstrap.css',
            './public/css/responsive.bootstrap.css',
            './public/css/scroller.bootstrap.css'
        ], 'public/css/datatables.css');
    });

    //
    mix.copy('node_modules/iCheck/skins/flat/green.css', 'public/css/iCheck-green.css');

    /****************/
    /* Copy Scripts */
    /****************/

    // Bootstrap
    mix.copy('node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');

    // jQuery
    mix.copy('node_modules/gentelella/vendors/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

    // Gentelella
    mix.copy('node_modules/gentelella/build/js/custom.min.js', 'public/js/gentelella.min.js');

    //DataTables
    mix.copy('node_modules/datatables.net/js/jquery.dataTables.js', 'public/js/jquery.dataTables.js');
    mix.copy('node_modules/datatables.net-bs/js/dataTables.bootstrap.js', 'public/js/dataTables.bootstrap.js');
    mix.copy('node_modules/datatables.net-buttons/js/dataTables.buttons.js', 'public/js/dataTables.buttons.js');
    mix.copy('node_modules/datatables.net-buttons-bs/js/buttons.bootstrap.js', 'public/js/buttons.bootstrap.js');
    mix.copy('node_modules/datatables.net-buttons/js/buttons.flash.js', 'public/js/buttons.flash.js');
    mix.copy('node_modules/datatables.net-buttons/js/buttons.html5.js', 'public/js/buttons.html5.js');
    mix.copy('node_modules/datatables.net-buttons/js/buttons.print.js', 'public/js/buttons.print.js');
    mix.copy('node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.js', 'public/js/dataTables.fixedHeader.js');
    mix.copy('node_modules/datatables.net-keytable/js/dataTables.keyTable.js', 'public/js/dataTables.keyTable.js');
    mix.copy('node_modules/datatables.net-responsive/js/dataTables.responsive.js', 'public/js/dataTables.responsive.js');
    mix.copy('node_modules/datatables.net-responsive-bs/js/responsive.bootstrap.js', 'public/js/responsive.bootstrap.js');
    mix.copy('node_modules/datatables.net-scroller/js/datatables.scroller.js', 'public/js/datatables.scroller.js');

    elixir(function(mix) {
        mix.scripts([
            './public/js/jquery.dataTables.js',
            './public/js/dataTables.bootstrap.js',
            './public/js/dataTables.buttons.js',
            './public/js/buttons.bootstrap.js',
            './public/js/buttons.flash.js',
            './public/js/buttons.html5.js',
            './public/js/buttons.print.js',
            './public/js/dataTables.fixedHeader.js',
            './public/js/dataTables.keyTable.js',
            './public/js/dataTables.responsive.js',
            './public/js/responsive.bootstrap.js',
            './public/js/datatables.scroller.js'
        ], 'public/js/datatables.js');
    });

    //
    mix.copy('node_modules/nprogress/nprogress.js', 'public/js/nprogress.js');
    mix.copy('node_modules/fastclick/lib/fastclick.js', 'public/js/fastclick.js');

    /**************/
    /* Copy Fonts */
    /**************/

    // Bootstrap
    mix.copy('node_modules/gentelella/vendors/bootstrap/fonts/', 'public/fonts');

    // Font awesome
    mix.copy('node_modules/gentelella/vendors/font-awesome/fonts/', 'public/fonts');
});
