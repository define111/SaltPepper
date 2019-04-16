var n;
// var step;
// For the buttons
window.nextPrev = function(n) {
if (n == 1) {
  document.getElementById('regForm').action = '/events/create-step2back';
  document.getElementsByClassName("step")[n].className += " finish";
  document.getElementsByClassName("step")[n-1].className += " finish";
  document.getElementsByClassName("step")[n-2].className += " finish";
} else if (n == 2) {
  document.getElementById('regForm').action = '/events/create-step3back';
  document.getElementsByClassName("step")[n].className += " finish";
  document.getElementsByClassName("step")[n-1].className += " finish";
} else {
}
}
// For the progress circles finished steps
window.StepIndicator = function(step) {
  document.getElementsByClassName("step")[step].className += " finish";
};
