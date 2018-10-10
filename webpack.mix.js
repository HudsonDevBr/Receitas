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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('node_modules/font-awesome/fonts/', 'public/fonts')
   .sass('node_modules/font-awesome/scss/font-awesome.scss', 'public/css')
   .styles([
    'public/css/css-dev/font.css',
    'public/css/css-dev/style.css',
   ], 'public/css/all.css');
