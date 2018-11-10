/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 58);
/******/ })
/************************************************************************/
/******/ ({

/***/ 58:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(59);


/***/ }),

/***/ 59:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(60);

/***/ }),

/***/ 60:
/***/ (function(module, exports) {

/* JS Document */

/******************************

 [Table of Contents]

 1. Vars and Inits
 2. Set Header
 3. Init Menu
 4. Init Google Map


 ******************************/

$(document).ready(function () {
    "use strict";

    /*
      1. Vars and Inits
      */

    var header = $('.header');
    var menu = $('.menu');
    var menuActive = false;
    var map;

    setHeader();

    $(window).on('resize', function () {
        setHeader();

        setTimeout(function () {
            $(window).trigger('resize.px.parallax');
        }, 375);
    });

    $(document).on('scroll', function () {
        setHeader();
    });

    initMenu();
    initGoogleMap();

    /*
      2. Set Header
      */

    function setHeader() {
        if ($(window).scrollTop() > 127) {
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    }

    /*
      3. Init Menu
      */

    function initMenu() {
        if ($('.hamburger').length && $('.menu').length) {
            var hamb = $('.hamburger');
            var close = $('.menu_close_container');

            hamb.on('click', function () {
                if (!menuActive) {
                    openMenu();
                } else {
                    closeMenu();
                }
            });

            close.on('click', function () {
                if (!menuActive) {
                    openMenu();
                } else {
                    closeMenu();
                }
            });
        }
    }

    function openMenu() {
        menu.addClass('active');
        menuActive = true;
    }

    function closeMenu() {
        menu.removeClass('active');
        menuActive = false;
    }

    /*
    4. Init Google Map
    */

    function initGoogleMap() {
        var myLatlng = new google.maps.LatLng(34.063685, -118.272936);
        var uluru = { lat: 34.063685, lng: -118.272936 };
        var mapOptions = {
            center: myLatlng,
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            draggable: true,
            scrollwheel: false,
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.RIGHT_CENTER
            },
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            fullscreenControl: true,
            styles: [{
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffeba1"
                }]
            }]

            // Initialize a map with options
        };map = new google.maps.Map(document.getElementById('map'), mapOptions);
        // Re-center map after window resize
        google.maps.event.addDomListener(window, 'resize', function () {
            setTimeout(function () {
                google.maps.event.trigger(map, "resize");
                map.setCenter(myLatlng);
            }, 1400);
        });
    }
});

/***/ })

/******/ });