let mix = require('laravel-mix');

/*
mix.autoload({
  'jquery': ['$', 'window.jQuery', 'jQuery'],
});
*/

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 */

mix
.sass('resources/assets/sass/rev-slider.scss', 'public/css')  
.sass('resources/assets/sass/app.scss', 'public/css')

/*
.sass('resources/assets/sass/admin/app.scss', 'public/css/admin')
*/

.js('resources/assets/js/app.js', 'public/js');

/*
.js('resources/assets/js/admin/app.js', 'public/js/admin').sourceMaps();
*/