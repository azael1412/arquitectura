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
//    .sass('resources/sass/app.scss', 'public/css');
mix.styles([
   'resources/css/web/bootstrap/css/bootstrap.min.css',
   //'resources/css/web/font-awesome/css/font-awesome.min.css',
   'resources/css/web/animate/animate.min.css',
   'resources/css/web/style.css',
], 'public/css/web.min.css')
.scripts([
   'resources/js/web/jquery/jquery.min.js',
   'resources/js/web/jquery/jquery-migrate.min.js',
   'resources/js/web/bootstrap/js/bootstrap.bundle.min.js',
   'resources/js/web/easing/easing.min.js',
   'resources/js/web/wow/wow.min.js',
   'resources/js/web/waypoints/waypoints.min.js',
   'resources/js/web/counterup/counterup.min.js',
   'resources/js/web/superfish/hoverIntent.js',
   'resources/js/web/superfish/superfish.min.js',
   'resources/js/web/superfish/hoverIntent.js',
   'resources/js/web/main.js',
], 'public/js/web.min.js');
