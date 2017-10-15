let mix = require('laravel-mix');

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

mix.styles(
    [
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'node_modules/tether/dist/css/tether.css',
        'node_modules/tether/dist/css/tether-theme-basic.css',
        'node_modules/ekko-lightbox/dist/ekko-lightbox.css',
        'resources/assets/css/app.css',
    ], 'public/css/app.css'
);

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'resources/assets/js/popper.js',
    'node_modules/tether/dist/js/tether.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/ekko-lightbox/dist/ekko-lightbox.js',
    'node_modules/masonry-layout/dist/masonry.pkgd.js',
    'resources/assets/js/*.js',
], 'public/js/app.js');
