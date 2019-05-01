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
    'resources/admin/dist/css/bootstrap.min.css',
    'resources/admin/dist/css/font-awesome.min.css',
    'resources/admin/dist/css/ionicons.min.css',
    'resources/admin/dist/css/AdminLTE.min.css',
    'resources/admin/dist/css/skins/_all-skins.min.css',
], 'public/css/admin.css');

mix.scripts([
    'resources/admin/dist/js/jquery.min.js',
    'resources/admin/dist/js/bootstrap.min.js',
    'resources/admin/dist/js/fastclick.js',
    'resources/admin/dist/js/adminlte.min.js',
    'resources/admin/dist/js/demo.js',
], 'public/js/admin.js');

mix.copy('resources/admin/dist/fonts', 'public/fonts');
mix.copy('resources/admin/dist/img', 'public/img');