
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)

global.$ = global.jQuery = $;

// JS
require('../css/app.css');

require('waypoints');
require('jquery-validation');
require('bootstrap');
require('./main.js');
require('./modernizr.js');
require('./pace.min.js');
require('./plugins.js');



// Fonts
require('../css/font-awesome/css/font-awesome.css');
require('../css/font-awesome/fonts/FontAwesome.otf');
require('../css/font-awesome/fonts/fontawesome-webfont.eot');
require('../css/font-awesome/fonts/fontawesome-webfont.svg');
require('../css/font-awesome/fonts/fontawesome-webfont.ttf');
require('../css/font-awesome/fonts/fontawesome-webfont.woff');
require('../css/font-awesome/fonts/fontawesome-webfont.woff2');

// Micons
require('../css/micons/fonts/icomoon.eot');
require('../css/micons/fonts/icomoon.svg');
require('../css/micons/fonts/icomoon.ttf');
require('../css/micons/fonts/icomoon.woff');
require('../css/micons/micons.css');

// CSS
require('../css/base.css');
require('../css/fonts.css');
require('../css/main.css');
require('../css/vendor.css');



// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
 const $ = require('jquery');

// Leaflet
 require('leaflet');
 require('leaflet.markercluster');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
