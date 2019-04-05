
// Calculate the data
document.getElementById("people").addEventListener("change", function() {
var theParent = document.querySelector("#eventData");
theParent.addEventListener("change", calculateEndtime, false);

function calculateEndtime(e) {
  var startdateDoc = document.getElementById("date").value;
  var starttimeDoc = document.getElementById("starttime").value;
  var startdate = startdateDoc.concat('T', starttimeDoc,':00');
  var start = new Date(startdate);
  var numberOfPeople = Number(document.getElementById("people").value);
  var durationOfDate = Number(document.getElementById("duration").value);
  var durationOfDates = durationOfDate*numberOfPeople;
  var endtime = start.setMinutes(start.getMinutes()+durationOfDates);
  var endtimeDoc = new Date (endtime);
  document.getElementById('enddate').value = endtimeDoc.toISOString().split('T')[0];
  ('yyyy-MM-dd',{year: 'numeric', month: '2-digit', day: '2-digit'});
  document.getElementById('endtime').value = endtimeDoc.toLocaleString('de-DE',{hour: 'numeric', minute: 'numeric'});
  e.stopPropagation();
};
});

document.getElementById("price").addEventListener("change", function() {
var theParent = document.querySelector("#eventData");
theParent.addEventListener("change", calculateEndtime, false);

function calculateEndtime(e) {
  var numberOfPeople = Number(document.getElementById("people").value);
  var price = Number(document.getElementById("price").value);
  var percentage = 0.85;
  var profit = 2*percentage*numberOfPeople*price;
  document.getElementById('profit').value=profit;
  e.stopPropagation();
};
});

// function to close and open price details
function preisdetails() {
  detail = document.querySelector(".preisdetail");
  check=document.getElementById("preisdetails");
  if (check.value === "nein") {
    detail.style.display = "";
  } else {
    detail.style.display = "none";
  }   // The function returns the product of p1 and p2
}
// Create a collapsible part (1) and choose different prices for the two groups (2)
// 1
document.querySelector(".content").style.display = "none";
var coll = document.getElementsByClassName("collapsible");
// 2
var detail = document.querySelector(".preisdetail");
var check=document.getElementById("preisdetails");

coll[0].addEventListener("click", function() {
  // 1
  this.classList.toggle("active");
  var content = this.nextElementSibling;
  if (content.style.display === "none") {
    content.style.display = "";
  } else {
    content.style.display = "none";
  };
  // 2
  preisdetails()
});

// Create a possibility to choose different prices for the two groups
$("#preisdetails").change(function() {
  preisdetails()
});

//Change the label for the two prices
var priceA = document.getElementById("labelpriceA");
var priceB = document.getElementById("labelpriceB");
var sideA = document.getElementsByName("sideA")[0].value;
var sideB = document.getElementsByName("sideB")[0].value;
priceA.innerHTML = 'Preis für' + sideA + ' (Euro)';
priceB.innerHTML = 'Preis für' + sideB + ' (Euro)';

// for the address autocompleted
  var engine = new PhotonAddressEngine({
    lang: 'de',
    formatResult: function (feature) {
                      var formatted = feature.properties.name,
                          type = feature.properties.osm_value;

                      if (feature.properties.street) {
                        formatted += ', ' + feature.properties.street;
                      }

                      if (feature.properties.housenumber) {
                        formatted += ' ' + feature.properties.housenumber;
                      }

                      if (feature.properties.city &&
                            feature.properties.city !== feature.properties.name) {
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
  });

  //for the datepicker
  $( function() {
    $( "#datepicker" ).datepicker({dateFormat: 'dd.mm.yy'});
  } );

//for the clockpicker
$('.clockpicker').clockpicker({
  autoclose: true,
  default: 'now'
});
