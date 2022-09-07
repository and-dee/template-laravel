const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/assets/js')
    .sass('resources/sass/app.scss', 'public/assets/css');
    // .sass('resources/sass/tabler-flags.scss', 'public/css')
    // .sass('resources/sass/tabler-payments.scss', 'public/css')
    // .sass('resources/sass/tabler-vendors.scss', 'public/css')
    // .sass('resources/sass/demo.scss', 'public/css');
