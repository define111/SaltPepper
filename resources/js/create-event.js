
// Calculate the endtime and enddate
document.getElementById('endDateDiv').style.display = "none";
$('#toCalc').on("change", calculateEndtime);

function calculateEndtime(e) {
  var startdateDoc = document.getElementById("startdate").value;
  var starttimeDoc = document.getElementById("starttime").value;
  var startdatestring = startdateDoc.split(".");
  var starttimestring = starttimeDoc.split(":");
  var startdateDocformat = startdatestring[2].concat("-",startdatestring[1],"-",startdatestring[0]);
  var startdate = new Date(startdatestring[2], startdatestring[1], startdatestring[0],  starttimestring[0], starttimestring[1],'00');
  var numberOfPeople = Number(document.getElementById("people").value);
  var durationOfDate = Number(document.getElementById("duration").value);
  var breakForRelax = Number(document.getElementById("break").value);
  var registration = Number(document.getElementById("registration").value);
  var durationOfbizDate = durationOfDate*numberOfPeople+breakForRelax+registration;
  var endtimeCalc = startdate.setMinutes(startdate.getMinutes()+durationOfbizDate);
  var endtime = new Date (endtimeCalc);
  var endtimeDocMin=endtime.getMinutes();
  var endtimeDocHrs=endtime.getHours();
  var endtimeDocDay=endtime.getDate().toString();
  var endtimeDocMonth=endtime.getMonth().toString();
  var endtimeDocYear=endtime.getFullYear().toString();
  if (endtimeDocDay < 10) {
  endtimeDocDay = '0' + endtimeDocDay;
  }
  if (endtimeDocMonth < 10) {
    endtimeDocMonth = '0' + endtimeDocMonth;
  }
  var endtimeDoc=endtimeDocHrs+":"+endtimeDocMin;
  var enddateDoc=endtimeDocYear.concat("-",endtimeDocMonth,"-",endtimeDocDay);
  document.getElementById('endtime').value = endtimeDoc;
  if (!enddateDoc == startdateDocformat) {
    document.getElementById('enddate').value = enddateDoc;
  } else {
  }
};
// Calculate the profit
calculateProfit()
$('#toCalc').on("change", calculateProfit());
function calculateProfit() {
  var numberOfPeople = Number(document.getElementById("people").value);
  const percentage = 0.8;
  if (document.getElementById("preisdetails").value=="nein"){
    var price = Number(document.getElementById("price").value);
    var profit = percentage*numberOfPeople*2*price;
  } else{
    var priceA = Number(document.getElementById("priceA").value);
    var priceB = Number(document.getElementById("priceB").value);
    var profit = percentage*numberOfPeople*(priceA+priceB);
  };
  document.getElementById('profit').value=profit;
};
document.getElementById("price").addEventListener("change", calculateProfit());

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
    $("#startdate").datepicker(
      {dateFormat: 'dd.mm.yy'},
      {onSelect: function() {$(this).change()}}
    );

//for the clockpicker
var input = $('.clockpicker');
input.clockpicker({
    autoclose: true,
    afterDone: function() {
          input.trigger("change");
    }
});
