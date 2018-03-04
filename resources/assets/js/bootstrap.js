window._ = require('lodash');

/**
 * jQuery and the Bootstrap jQuery plugin
 */
try {
	window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}

/**
 * Load theme based libraries
 * Modernizr, Isotope, Magnific Popup, Waypoints, CountTo, Parallax, Validate, OwlCarousel2
 */
require('./modernizr.js');
require('./plugins/isotope.pkgd.js');
require('./plugins/magnific-popup.js');
require('./plugins/waypoints.js');
require('./plugins/countTo.js');
require('./plugins/validate.js');
require('owl.carousel');
require('./plugins/nice-select.js');

/**
 * The axios HTTP library 
 */
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */
// import Echo from 'laravel-echo'
// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key',
//     cluster: 'mt1',
//     encrypted: true
// });
