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
    .js('resources/js/admin/app.js', 'public/js/admin')
    .js('resources/js/realtors/realtors.js', 'public/js/realtors')
    .js('resources/js/material/app.js', 'public/js/material')
    .js('resources/js/home.js', 'public/js')
    .js('resources/js/about.js', 'public/js')
    .js('resources/js/properties.js', 'public/js')
    .js('resources/js/news.js', 'public/js')
    .js('resources/js/contact.js', 'public/js')
    .js('resources/js/property.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/about.scss', 'public/css')
    .sass('resources/sass/properties.scss', 'public/css')
    .sass('resources/sass/news.scss', 'public/css')
    .sass('resources/sass/contact.scss', 'public/css')
    .sass('resources/sass/property.scss', 'public/css')
    .sass('resources/sass/admin/app.scss', 'public/css/admin')
    .sass('resources/sass/login.scss', 'public/css/')
    .sass('resources/sass/realtors/realtors.scss', 'public/css')
    .sass('resources/sass/material/app.scss', 'public/css/material');
// .copy('node_modules/gentelella/build/', 'resources/gentellea/',false);
