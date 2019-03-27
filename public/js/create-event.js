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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/create-event.js":
/*!**************************************!*\
  !*** ./resources/js/create-event.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// window.Bloodhound = require('bloodhound');
// Calculate the data
document.getElementById("people").addEventListener("change", function () {
  var theParent = document.querySelector("#eventData");
  theParent.addEventListener("change", calculateEndtime, false);

  function calculateEndtime(e) {
    var startdateDoc = document.getElementById("date").value;
    var starttimeDoc = document.getElementById("starttime").value;
    var startdate = startdateDoc.concat('T', starttimeDoc, ':00');
    var start = new Date(startdate);
    var numberOfPeople = Number(document.getElementById("people").value);
    var durationOfDate = Number(document.getElementById("duration").value);
    var durationOfDates = durationOfDate * numberOfPeople;
    var endtime = start.setMinutes(start.getMinutes() + durationOfDates);
    var endtimeDoc = new Date(endtime);
    document.getElementById('enddate').value = endtimeDoc.toISOString().split('T')[0];
    'yyyy-MM-dd', {
      year: 'numeric',
      month: '2-digit',
      day: '2-digit'
    };
    document.getElementById('endtime').value = endtimeDoc.toLocaleString('de-DE', {
      hour: 'numeric',
      minute: 'numeric'
    });
    e.stopPropagation();
  }

  ;
});
document.getElementById("price").addEventListener("change", function () {
  var theParent = document.querySelector("#eventData");
  theParent.addEventListener("change", calculateEndtime, false);

  function calculateEndtime(e) {
    var numberOfPeople = Number(document.getElementById("people").value);
    var price = Number(document.getElementById("price").value);
    var percentage = 0.85;
    var profit = 2 * percentage * numberOfPeople * price;
    document.getElementById('profit').value = profit;
    e.stopPropagation();
  }

  ;
}); // Create a collapsible part

document.querySelector(".content").style.display = "none";
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;

    if (content.style.display === "none") {
      content.style.display = "";
    } else {
      content.style.display = "none";
    }
  });
}

; // Create a possibility to choose different prices for the two groups

var detail = document.querySelector(".preisdetail");
detail.style.display = "none";
$("#preisdetails").change(function () {
  if (this.value === "nein") {
    detail.style.display = "";
  } else {
    detail.style.display = "none";
  }
}); // for the address autocompleted

var engine = new PhotonAddressEngine({
  lang: 'de',
  lat: 48.137154,
  lon: 11.576124
});
$('#inpAddress').typeahead(null, {
  source: engine.ttAdapter(),
  displayKey: 'description'
}); //for the datepicker

$(function () {
  $("#datepicker").datepicker({
    dateFormat: 'yy-mm-dd'
  });
}); //for the clockpicker

$('.clockpicker').clockpicker({
  autoclose: true,
  default: 'now'
});

/***/ }),

/***/ 1:
/*!********************************************!*\
  !*** multi ./resources/js/create-event.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\inetpub\wwwroot\saltpepper\resources\js\create-event.js */"./resources/js/create-event.js");


/***/ })

/******/ });