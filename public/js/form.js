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
/******/ 	return __webpack_require__(__webpack_require__.s = 66);
/******/ })
/************************************************************************/
/******/ ({

/***/ 66:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(67);


/***/ }),

/***/ 67:
/***/ (function(module, exports) {

$(document).ready(function () {
  $("#show-password-btn").click(function () {
    $password = $('#password');
    $password_confirmation = $('#password-confirmation');
    if ($password.attr('type') == 'text') {
      $password.attr('type', 'password');
      $password_confirmation.attr('type', 'password');
      $("#show-password-btn i").removeClass('fa-eye-slash');
      $("#show-password-btn i").addClass('fa-eye');
    } else {
      $password.attr('type', 'text');
      $password_confirmation.attr('type', 'text');
      $("#show-password-btn i").removeClass('fa-eye');
      $("#show-password-btn i").addClass('fa-eye-slash');
    }
  });

  $("#password-confirmation").on('keyup', function () {
    $password_confirmation_value = $(this).val();
    $password_value = $("#password").val();
    $("#show-password-confirmation-btn").removeClass("hide");
    if ($password_confirmation_value == $password_value) {
      $("#show-password-confirmation-btn").removeClass("error");
      $("#show-password-confirmation-btn").addClass("success");
      $("#show-password-confirmation-btn i").removeClass('fa-exclamation');
      $("#show-password-confirmation-btn i").addClass('fa-check');
    } else {
      $("#show-password-confirmation-btn").removeClass("success");
      $("#show-password-confirmation-btn").addClass("error");
      $("#show-password-confirmation-btn i").removeClass('fa-check');
      $("#show-password-confirmation-btn i").addClass('fa-exclamation');
    }
  });
  $("#password-confirmation").on('focus', function () {
    $password_confirmation_value = $(this).val();
    $password_value = $("#password").val();

    if ($password_value != '') $("#show-password-confirmation-btn").removeClass("hide");

    if ($password_confirmation_value == $password_value) {
      $("#show-password-confirmation-btn").removeClass("error");
      $("#show-password-confirmation-btn").addClass("success");
      $("#show-password-confirmation-btn i").removeClass('fa-exclamation');
      $("#show-password-confirmation-btn i").addClass('fa-check');
    } else {
      $("#show-password-confirmation-btn").removeClass("success");
      $("#show-password-confirmation-btn").addClass("error");
      $("#show-password-confirmation-btn i").removeClass('fa-check');
      $("#show-password-confirmation-btn i").addClass('fa-exclamation');
    }
  });
});

/***/ })

/******/ });