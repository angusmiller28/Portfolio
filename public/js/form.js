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

  $(document).on('change', '#filev', function () {
    $file = $('.file input[type=file]');
    $filename = $('.file input[type=file]').val().split('\\').pop();

    $('#form-file-name').css('margin-right', '10px');
    $('#form-file-name').text($filename);
  });

  $(document).on('change', '#filea', function () {
    $max_file_size = 2048000;
    $file_size = this.files[0].size;

    $("#file-status").removeClass("hide");
    $("#form-feedback-server").remove();

    // check file size not over
    if ($max_file_size < $file_size) {
      $("#file-status").removeClass("success");
      $("#file-status").addClass("error");
      $("#file-status i").removeClass('fa-check');
      $("#file-status i").addClass('fa-exclamation');
      $("#form-file-message").text("Selected file is over 2MB!");
      $("#form-file-message").css({ "color": "#eb0d0d", "font-size": "0.8em", "background-color": "white", "padding": "10px" });
    } else {
      $("#file-status").removeClass("error");
      $("#file-status").addClass("success");
      $("#file-status i").removeClass('fa-exclamation');
      $("#file-status i").addClass('fa-check');
      $("#form-file-message").text("Selected file is ok");
      $("#form-file-message").css({ "color": "#0deb94", "font-size": "0.8em" });
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