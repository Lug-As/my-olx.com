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
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/bootstrap-select.css',
    'resources/assets/css/style.css',
    'resources/assets/css/flexslider.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/menu_sideslide.css',
    'resources/assets/css/jquery.uls.css',
    'resources/assets/css/jquery.uls.grid.css',
    'resources/assets/css/jquery.uls.lcd.css',
], 'public/css/style.css');

mix.scripts([
    'resources/assets/js/main.js',
    'resources/assets/js/classie.js',
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/bootstrap.js',
    'resources/assets/js/bootstrap-select.js',
    'resources/assets/js/jquery.leanModal.min.js',
    'resources/assets/js/jquery.uls.data.js',
    'resources/assets/js/jquery.uls.data.utils.js',
    'resources/assets/js/jquery.uls.lcd.js',
    'resources/assets/js/jquery.uls.languagefilter.js',
    'resources/assets/js/jquery.uls.regionfilter.js',
    'resources/assets/js/jquery.uls.core.js',
    'resources/assets/js/jquery.flexisel.js',
    'resources/assets/js/responsiveslides.min.js',
    'resources/assets/js/move-top.js',
    'resources/assets/js/easing.js',
    'resources/assets/js/my.js',
], 'public/js/script.js');

mix.copy('resources/assets/images', 'public/images');
mix.copy('resources/assets/fonts', 'public/fonts');
