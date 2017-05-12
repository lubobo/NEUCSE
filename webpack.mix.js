const { mix } = require('laravel-mix');
//const elixir = require('laravel-elixir');
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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .less('node_modules/bootstrap/less/bootstrap.less','public/bootstrap/css')
    .js('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js','public/bootstrap/js');
    //.less('node_modules/bootstrap/less','public/bootstrap/css')
    //.js('node_modules/bootstrap/js/affix.js','public/bootstrap/js');
    //.js('node_modules/bootstrap-sass/javascripts','public/bootstrap/js');