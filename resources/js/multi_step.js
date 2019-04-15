var n;
var step;
// For the buttons
window.nextPrev = function(n) {
if (n == 1) {
  document.getElementById('regForm').action = '/events/create-step2back';
} else if (n == 2) {
  document.getElementById('regForm').action = '/events/create-step3back';
} else {
}
}
// For the progress circles finished steps
window.StepIndicator = function fixStepIndicator(step) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[step].className += " active";
};
