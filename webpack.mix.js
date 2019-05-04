const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'resources/admin/bower_components/bootstrap/dist/css/bootstrap.min.css',
    'resources/admin/bower_components/font-awesome/css/font-awesome.min.css',
    'resources/admin/bower_components/Ionicons/css/ionicons.min.css',
    'resources/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
    'resources/admin/dist/css/AdminLTE.min.css',
    'resources/admin/dist/css/skins/_all-skins.min.css',
    'resources/admin/bower_components/morris.js/morris.css',
    'resources/admin/bower_components/jvectormap/jquery-jvectormap.css',
    'resources/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
    'resources/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css',
    'resources/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
], 'public/css/admin.css');

mix.scripts([
    'resources/admin/bower_components/jquery/dist/jquery.min.js',
    'resources/admin/bower_components/jquery-ui/jquery-ui.min.js',
    'resources/admin/dist/js/resolve.conflict.js',
    'resources/admin/bower_components/bootstrap/dist/js/bootstrap.min.js',
    'resources/admin/bower_components/raphael/raphael.min.js',
    'resources/admin/bower_components/morris.js/morris.min.js',
    'resources/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js',
    'resources/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    'resources/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    'resources/admin/bower_components/jquery-knob/dist/jquery.knob.min.js',
    'resources/admin/bower_components/moment/min/moment.min.js',
    'resources/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js',
    'resources/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
    'resources/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    'resources/admin/bower_components/datatables.net/js/jquery.dataTables.min.js',
    'resources/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
    'resources/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
    'resources/admin/bower_components/fastclick/lib/fastclick.js',
    'resources/admin/dist/js/adminlte.min.js',
    'resources/admin/dist/js/pages/dashboard.js',
    'resources/admin/dist/js/demo.js',
], 'public/js/admin.js');

mix.copy('resources/admin/dist/fonts', 'public/fonts');
mix.copy('resources/admin/bower_components/Ionicons/fonts/', 'public/fonts');
mix.copy('resources/admin/dist/img', 'public/img');