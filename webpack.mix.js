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
   .copy('node_modules/corejs-typeahead/dist/typeahead.bundle.js', 'public/js')
   .copy('node_modules/typeahead-address-photon/dist/typeahead-address-photon.js', 'public/js')
   .copy('node_modules/clockpicker/dist/bootstrap-clockpicker.min.js', 'public/js')
   .copy('node_modules/clockpicker/dist/bootstrap-clockpicker.min.css', 'public/css')
   .js('resources/js/create-event.js', 'public/js')
   .js('resources/js/multi_step.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
