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
// Create a collapsible part
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
