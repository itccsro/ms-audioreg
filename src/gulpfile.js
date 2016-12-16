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
    mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
    mix.copy('bower_components/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css', 'public/css/bootstrap-progressbar.min.css');
    mix.copy('node_modules/jvectormap/jquery-jvectormap.css', 'public/css/jquery-jvectormap.css');

    // Font awesome
    mix.copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');

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
    mix.copy('node_modules/icheck/skins/flat/green.css', 'public/css/iCheck-green.css');

    /****************/
    /* Copy Scripts */
    /****************/

    // Bootstrap
    mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');

    // jQuery
    mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

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
    mix.copy('node_modules/jvectormap/jquery-jvectormap.js', 'public/js/jquery-jvectormap.min.js');
    mix.copy('node_modules/moment/moment.js', 'public/js/moment.js');
    mix.copy('node_modules/bootstrap-daterangepicker/daterangepicker.js', 'public/js/daterangepicker.js');
    mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/js/Chart.min.js');
    mix.copy('node_modules/gaugeJS/dist/gauge.min.js', 'public/js/gauge.min.js');
    mix.copy('bower_components/bootstrap-progressbar/bootstrap-progressbar.min.js', 'public/js/bootstrap-progressbar.min.js');
    mix.copy('node_modules/icheck/icheck.min.js', 'public/js/icheck.min.js');
    mix.copy('node_modules/skycons/skycons.js', 'public/js/skycons.js');


    mix.copy('node_modules/flot/jquery.flot.js', 'public/js/jquery.flot.js');
    mix.copy('node_modules/flot/jquery.flot.pie.js', 'public/js/jquery.flot.pie.js');
    mix.copy('node_modules/flot/jquery.flot.time.js', 'public/js/jquery.flot.time.js');
    mix.copy('node_modules/flot/jquery.flot.stack.js', 'public/js/jquery.flot.stack.js');
    mix.copy('node_modules/flot/jquery.flot.resize.js', 'public/js/jquery.flot.resize.js');
    mix.copy('bower_components/flot.orderbars/js/jquery.flot.orderBars.js', 'public/js/jquery.flot.orderBars.js');
    mix.copy('bower_components/flot-spline/js/jquery.flot.spline.min.js', 'public/js/jquery.flot.spline.min.js');
    mix.copy('bower_components/flot.curvedlines/curvedLines.js', 'public/js/curvedLines.js');

    elixir(function(mix) {
        mix.scripts([
            './public/js/jquery.flot.js',
            './public/js/jquery.flot.pie.js',
            './public/js/jquery.flot.time.js',
            './public/js/jquery.flot.stack.js',
            './public/js/jquery.flot.resize.js',
            './public/js/jquery.flot.orderBars.js',
            './public/js/date.js',
            './public/js/jquery.flot.spline.min.js',
            './public/js/curvedLines'
        ], 'public/js/flot.js');
    });


    /**************/
    /* Copy Fonts */
    /**************/

    // Bootstrap
    mix.copy('node_modules/gentelella/vendors/bootstrap/fonts/', 'public/fonts');

    // Font awesome
    mix.copy('node_modules/gentelella/vendors/font-awesome/fonts/', 'public/fonts');
});
