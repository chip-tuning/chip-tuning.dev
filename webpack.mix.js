let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 */
mix.js('resources/assets/js/vendor.js', 'public/js')
   .js('resources/assets/js/app.js', 'public/js')
   //.sass('resources/assets/sass/vendor.scss', 'public/css');
   //.sass('resources/assets/sass/rev-slider.scss', 'public/css')   
   //.sass('resources/assets/sass/app.scss', 'public/css');