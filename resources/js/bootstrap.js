/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
import * as Popper from '@popperjs/core';
import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';


import 'filepond/dist/filepond.min.css';



// Import the plugin styles
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';

// Register the plugin
FilePond.registerPlugin(FilePondPluginImagePreview);
window.Popper = Popper;

// import '../../node_modules/bootstrap/dist/js/bootstrap.js';

import * as bootstrap from '../../node_modules/bootstrap/dist/js/bootstrap.esm.js';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';
import  Chart  from 'chart.js/auto';
import ChartDataLabels from 'chartjs-plugin-datalabels';


window.axios = axios;
window.bootstrap = bootstrap;
window.FilePond = FilePond;

window.FilePond = FilePond;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Chart = Chart;
window.ChartDataLabels = ChartDataLabels;


FilePond.registerPlugin(
    
    FilePondPluginImagePreview,
    
  );
  

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
