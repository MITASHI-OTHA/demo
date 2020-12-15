/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';

// create global $ and jQuery variables
global.$ = global.jQuery = $;

import 'popper.js';

import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.css';
import 'cropperjs/dist/cropper.css';
import 'bootstrap-datepicker/js/bootstrap-datepicker.js';
import 'bootstrap-datepicker/js/locales/bootstrap-datepicker.fr.js';
import 'bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css';
require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');

import './global_jquery';
import './crop_avatar';
import './datepicker';
import './autogrow';
console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
