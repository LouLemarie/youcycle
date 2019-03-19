/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)


global.$ = global.jQuery = $;


// CSS
require('../css/base.css');
require('../css/main.css');

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

// Javascript
require('./modernizr.js');
require('./pace.min.js');
require('./jquery-3.2.1.min.js');
require('./plugins.js');
require('./main.js');
require('./searchbar.js');


require('../css/app.css');
require('../css/form.css');
require('../js/map.js');



// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
 const $ = require('jquery');

// Leaflet
 require('leaflet');
 require('leaflet.markercluster');

console.log('Ça marche niquel Michel!');
