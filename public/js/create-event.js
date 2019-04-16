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

// Calculate the endtime and enddate
document.getElementById('endDateDiv').style.display = "none";

if (session_event) {
  calculate();
} else {
  calculateProfit();
}

$('#toCalc').on("change", calculate);

function calculate(e) {
  calculateEndtime();
  calculateProfit();
}

;

function calculateEndtime(e) {
  var startdateDoc = document.getElementById("startdate").value;
  var starttimeDoc = document.getElementById("starttime").value;
  var startdatestring = startdateDoc.split(".");
  var starttimestring = starttimeDoc.split(":");
  var startdateDocformat = startdatestring[2].concat("-", startdatestring[1], "-", startdatestring[0]);
  var startdate = new Date(startdatestring[2], startdatestring[1], startdatestring[0], starttimestring[0], starttimestring[1], '00');
  var numberOfPeople = Number(document.getElementById("people").value);
  var durationOfDate = Number(document.getElementById("duration").value);
  var breakForRelax = Number(document.getElementById("break").value);
  var registration = Number(document.getElementById("registration").value);
  var durationOfbizDate = durationOfDate * numberOfPeople + breakForRelax + registration;
  var endtimeCalc = startdate.setMinutes(startdate.getMinutes() + durationOfbizDate);
  var endtime = new Date(endtimeCalc);
  var endtimeDocMin = endtime.getMinutes();
  var endtimeDocHrs = endtime.getHours();
  var endtimeDocDay = endtime.getDate().toString();
  var endtimeDocMonth = endtime.getMonth().toString();
  var endtimeDocYear = endtime.getFullYear().toString();

  if (endtimeDocDay < 10) {
    endtimeDocDay = '0' + endtimeDocDay;
  }

  if (endtimeDocMonth < 10) {
    endtimeDocMonth = '0' + endtimeDocMonth;
  }

  if (endtimeDocHrs < 10) {
    endtimeDocHrs = '0' + endtimeDocHrs;
  }

  if (endtimeDocMin < 10) {
    endtimeDocMin = '0' + endtimeDocMin;
  }

  var endtimeDoc = endtimeDocHrs + ":" + endtimeDocMin;
  var enddateDoc = endtimeDocYear.concat("-", endtimeDocMonth, "-", endtimeDocDay);
  document.getElementById('endtime').value = endtimeDoc;

  if (!enddateDoc == startdateDocformat) {
    document.getElementById('enddate').value = enddateDoc;
  } else {}
}

; // Calculate the profit

function calculateProfit() {
  var numberOfPeople = Number(document.getElementById("people").value);
  var percentage = 0.8;

  if (document.getElementById("preisdetails").value == "nein") {
    var price = Number(document.getElementById("price").value);
    var profit = percentage * numberOfPeople * 2 * price;
  } else {
    var priceA = Number(document.getElementById("priceA").value);
    var priceB = Number(document.getElementById("priceB").value);
    var profit = percentage * numberOfPeople * (priceA + priceB);
  }

  ;
  document.getElementById('profit').value = profit;
}

;
document.getElementById("price").addEventListener("change", calculateProfit()); // function to close and open price details

function preisdetails() {
  detail = document.querySelector(".preisdetail");
  check = document.getElementById("preisdetails");

  if (check.value === "nein") {
    detail.style.display = "";
  } else {
    detail.style.display = "none";
  }
} // Create a collapsible part (1) and choose different prices for the two groups (2)
// 1
// document.querySelector(".content").style.display = "none";


var coll = document.getElementsByClassName("collapsible"); // 2

var detail = document.querySelector(".preisdetail");
var check = document.getElementById("preisdetails");
coll[0].addEventListener("click", function () {
  // 1
  this.classList.toggle("active");
  var content = this.nextElementSibling;

  if (content.style.display === "block") {
    content.style.display = "none";
    this.childNodes[3].childNodes[1].innerHTML = "Zusatzoptionen einblenden";
  } else {
    content.style.display = "block";
    this.childNodes[3].childNodes[1].innerHTML = "Zusatzoptionen ausblenden";
  }

  ; // 2

  preisdetails();
}); // Create a possibility to choose different prices for the two groups

$("#preisdetails").change(function () {
  preisdetails(); //Change the label for the two prices

  var priceA = document.getElementById("labelpriceA");
  var priceB = document.getElementById("labelpriceB");
  var sideA = document.getElementsByName("sideA")[0].value;
  var sideB = document.getElementsByName("sideB")[0].value;
  priceA.innerHTML = 'Preis für ' + sideA + ' (Euro)';
  priceB.innerHTML = 'Preis für ' + sideB + ' (Euro)';
}); // for the address autocompleted

var engine = new PhotonAddressEngine({
  lang: 'de',
  formatResult: function formatResult(feature) {
    var formatted = feature.properties.name,
        type = feature.properties.osm_value;

    if (feature.properties.street) {
      formatted += ', ' + feature.properties.street;
    }

    if (feature.properties.housenumber) {
      formatted += ' ' + feature.properties.housenumber;
    }

    if (feature.properties.city && feature.properties.city !== feature.properties.name) {
      formatted += ', ' + feature.properties.city;
    }

    if (feature.properties.country) {
      formatted += ', ' + feature.properties.country;
    }

    return formatted;
  },
  lat: 48.137154,
  lon: 11.576124
});
$('#inpAddress').typeahead(null, {
  source: engine.ttAdapter(),
  displayKey: 'description'
}); //for the datepicker

$("#startdate").datepicker({
  dateFormat: 'dd.mm.yy'
}, {
  onSelect: function onSelect() {
    $(this).change();
  }
}); //for the clockpicker

var input = $('.clockpicker');
input.clockpicker({
  autoclose: true,
  afterDone: function afterDone() {
    input.trigger("change");
  }
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