// Loodash
window._ = require('lodash');

// Popper
window.Popper = require('popper.js').default;

// Bootstrap 4
import 'bootstrap';

// Axios
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

// Masonry
import Masonry from 'masonry-layout';
window.addEventListener('load', () => {
	if ($('.masonry').length > 0) {
		new Masonry('.masonry', {
			itemSelector: '.masonry-item',
			columnWidth: '.masonry-sizer',
			percentPosition: true,
	  	});
	}
});

window.getSlug = require('speakingurl');
import 'jquery-slugify';
import './plugins/magicsuggest.js';

// Other Plugins
import './plugins/success';
import './plugins/confirm';