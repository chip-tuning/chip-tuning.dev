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
require('isotope-layout');
require('magnific-popup');
require('./jquery/waypoints.js');
require('./jquery/countTo.js');
require('./jquery/parallax.js');
require('./jquery/validate.js');
require('owl.carousel');

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
