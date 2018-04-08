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
/******/ 	return __webpack_require__(__webpack_require__.s = 59);
/******/ })
/************************************************************************/
/******/ ({

/***/ 59:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(60);


/***/ }),

/***/ 60:
/***/ (function(module, exports) {

$(document).ready(function () {
  var toolName;
  var toolLink;

  $("#tools-add").click(function () {
    toolName = $("#toolsName").val();
    toolLink = $("#toolsLink").val();
    $("#tools-list").append('<li><input type="text" name="tools[' + toolName + '][' + toolLink + ']" style="display:none"></li>');
    $("#tools-list").append('<li>Tool name: ' + toolName + '</li>');
    $("#tools-list").append('<li>Tool link: ' + toolLink + '</li>');
  });

  var socialName;
  var socialLink;

  $("#socials-add").click(function () {
    socialName = $("#socialsName").val();
    socialLink = $("#socialsLink").val();
    $("#socials-list").append('<li><input type="text" name="socials[' + socialName + '][' + socialLink + ']" style="display:none"></li>');
    $("#socials-list").append('<li>Social name: ' + socialName + '</li>');
    $("#socials-list").append('<li>Social link: ' + socialLink + '</li>');
  });

  var referenceName;
  var referenceStartDate;
  var referenceEndDate;
  var referenceDescription;
  var referenceBossTitle;
  var referenceBossName;
  var referenceAddressName;
  var referencePhoneNumber;
  var referenceEmail;
  var referenceCount = 0;
  $("#reference-add").click(function () {
    referenceName = $("#referenceTitle").val();
    referenceStartDate = $("#referenceStartDate").val();
    referenceEndDate = $("#referenceEndDate").val();
    referenceDescription = $("#referenceDescription").val();
    referenceBossTitle = $("#referenceBossTitle").val();
    referenceBossName = $("#referenceBossName").val();
    referenceAddressName = $("#referenceAddress").val();
    referencePhoneNumber = $("#referencePhoneNumber").val();
    referenceEmail = $("#referenceEmail").val();
    $("#reference-list").append('<ul id="' + referenceCount++ + '">');
    $("#reference-list").append('<li><input type="text" name="references[' + referenceName + '][' + referenceStartDate + '][' + referenceEndDate + '][' + referenceDescription + '][' + referenceBossTitle + '][' + referenceBossName + '][' + referenceAddressName + '][' + referencePhoneNumber + '][' + referenceEmail + ']" style="display:none"></li>');
    $("#reference-list").append('<li>Reference Name: ' + referenceName + '</li>');
    $("#reference-list").append('<li>Reference Start Date: ' + referenceStartDate + '</li>');
    $("#reference-list").append('<li>Reference Name: ' + referenceEndDate + '</li>');
    $("#reference-list").append('<li>Reference Description: ' + referenceDescription + '</li>');
    $("#reference-list").append('<li>Reference Boss Title: ' + referenceBossTitle + '</li>');
    $("#reference-list").append('<li>Reference Boss Name: ' + referenceBossName + '</li>');
    $("#reference-list").append('<li>Reference Address Name: ' + referenceAddressName + '</li>');
    $("#reference-list").append('<li>Reference Phone Number: ' + referencePhoneNumber + '</li>');
    $("#reference-list").append('<li>Reference Email: ' + referenceEmail + '</li>');
    $("#reference-list").append('</ul>');
  });

  $(".delete-reference").click(function () {
    $("#" + this.id).remove();
    $(".delete-reference-list").append('<li><input type="text" name="referencesDelete[' + this.id + ']" style="display:none"></li>');
  });

  var educationName;
  var educationStartDate;
  var educationEndDate;
  var educationInstitution;
  var educationGpa;

  $("#education-add").click(function () {
    educationName = $("#educationName").val();
    educationStartDate = $("#educationStartDate").val();
    educationEndDate = $("#educationEndDate").val();
    educationInstitution = $("#educationInstitution").val();
    educationGpa = $("#educationGpa").val();
    $("#education-list").append('<li><input type="text" name="educations[' + educationName + '][' + educationStartDate + '][' + educationEndDate + '][' + educationInstitution + '][' + educationGpa + ']" style="display:none"></li>');
    $("#education-list").append('<li>Education name: ' + educationName + '</li>');
    $("#education-list").append('<li>Education Start Date: ' + educationStartDate + '</li>');
    $("#education-list").append('<li>Education End Date: ' + educationEndDate + '</li>');
    $("#education-list").append('<li>Education Institution: ' + educationInstitution + '</li>');
    $("#education-list").append('<li>Education GPA: ' + educationGpa + '</li>');
  });

  $(".delete-education").click(function () {
    $("#" + this.id).remove();
    $(".delete-education-list").append('<li><input type="text" name="educationsDelete[' + this.id + ']" style="display:none"></li>');
  });
});

var technicalContent;

$("#technical-add").click(function () {
  technicalContent = $("#technicalContent").val();

  $("#technical-list").append('<li><input type="text" name="technicals[' + technicalContent + ']" style="display:none"></li>');
  $("#technical-list").append('<li>Technical name: ' + technicalContent + '</li>');
});

$(".delete-technical").click(function () {
  $("#" + this.id).remove();
  $(".delete-technical-list").append('<li><input type="text" name="technicalsDelete[' + this.id + ']" style="display:none"></li>');
});

var certificateName;
var certificateFileName;

$("#certificate-add").click(function () {
  certificateName = $("#certificateName").val();
  certificateFileName = $("#certificateFileName").val();

  $("#certificate-list").append('<li>Certificate name: ' + certificateName + '</li>');
  $("#certificate-list").append('<li>Certificate File: ' + certificateFileName + '</li>');
});

$(".delete-certificate").click(function () {
  $("#" + this.id).remove();
  $(".delete-certificate-list").append('<li><input type="text" name="certificatesDelete[' + this.id + ']" style="display:none"></li>');
});

/***/ })

/******/ });