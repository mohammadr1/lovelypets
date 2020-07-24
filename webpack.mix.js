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

 mix.styles([
     'resources/css/style.css',
     'resources/css/bootstrap.min.css',
     'resources/css/styleArticles.css',
     'resources/css/toastify.min.css',
     'resources/css/styleSlider.css',
     'resources/css/styleLoginAndRegister.css',

 ],'public/front/css/app.css')


mix.scripts([
    'resources/js/js/jsArticles.js',
    'resources/js/js/jquery.js',
    'resources/js/js/sliderJs.js',
    'resources/js/js/categoriesJs.js',
    'resources/js/js/jquery-3.4.1.min.js',
    'resources/js/js/login.js',
    'resources/js/js/register.js',
    'resources/js/js/clipboard.min.js',

],'public/front/js/app.js');