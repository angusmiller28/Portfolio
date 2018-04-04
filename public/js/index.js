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
/******/ 	return __webpack_require__(__webpack_require__.s = 55);
/******/ })
/************************************************************************/
/******/ ({

/***/ 55:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(56);


/***/ }),

/***/ 56:
/***/ (function(module, exports) {

$(document).ready(function () {
  var lastScrollTop = 0;
  $(window).scroll(function (event) {
    var st = $(this).scrollTop();
    console.log(st);

    // social section
    if (st >= 590 && st <= 736) {
      // linkedin
      $("#social-linkedin-icon").addClass("shift-down");
      $("#social-linkedin-icon").addClass("fa-linkedin-in");
      $("#social-linkedin-icon").removeClass("fa-linkedin");
      // facebook
      $("#social-facebook-icon").addClass("shift-down");
      $("#social-facebook-icon").addClass("fa-facebook-f");
      $("#social-facebook-icon").removeClass("fa-facebook-square");
      // phone
      $("#social-github-icon").addClass("shift-down");
      $("#social-github-icon").addClass("fa-github-alt");
      $("#social-github-icon").removeClass("fa-github");
    } else if (st >= 0 && st <= 589 || st >= 1176) {
      // linkedin
      $("#social-linkedin-icon").removeClass("shift-down");
      $("#social-linkedin-icon").removeClass("fa-linkedin-in");
      $("#social-linkedin-icon").addClass("fa-linkedin");
      // facebook
      $("#social-facebook-icon").removeClass("shift-down");
      $("#social-facebook-icon").removeClass("fa-facebook-f");
      $("#social-facebook-icon").addClass("fa-facebook-square");
      // github
      $("#social-github-icon").removeClass("shift-down");
      $("#social-github-icon").removeClass("fa-github-alt");
      $("#social-github-icon").addClass("fa-github");
    }

    // contact section
    if (st >= 1176 && st <= 1185) {
      // envelope
      $("#contact-address-icon").addClass("shift-down");
      $("#contact-address-icon").addClass("fa-envelope-open");
      $("#contact-address-icon").removeClass("fa-envelope");
      // map
      $("#contact-map-icon").addClass("shift-down");
      $("#contact-map-icon").addClass("fa-map-pin");
      $("#contact-map-icon").removeClass("fa-map");
      // phone
      $("#contact-phone-icon").addClass("shift-down");
      $("#contact-phone-icon").addClass("fa-phone-volume");
      $("#contact-phone-icon").removeClass("fa-phone");
    } else if (st >= 0 && st <= 1175 || st >= 1740) {
      // envelope
      $("#contact-address-icon").removeClass("shift-down");
      $("#contact-address-icon").removeClass("fa-envelope-open");
      $("#contact-address-icon").addClass("fa-envelope");
      // map
      $("#contact-map-icon").removeClass("shift-down");
      $("#contact-map-icon").removeClass("fa-map-pin");
      $("#contact-map-icon").addClass("fa-map");
      // phone
      $("#contact-phone-icon").removeClass("shift-down");
      $("#contact-phone-icon").removeClass("fa-phone-volume");
      $("#contact-phone-icon").addClass("fa-phone");
    }
  });

  $("#cover-letter-content").hide();
  $("#cover-letter-btn").click(function () {
    $("#cover-letter-content").toggle();
    $("#cover-letter-btn").toggleClass("fa-arrow-circle-down");
    $("#cover-letter-btn").toggleClass("fa-window-close");
  });
});

/***/ })

/******/ });