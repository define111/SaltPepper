var n;
// var step;
// For the buttons
window.nextPrev = function(n) {
if (n == 1) {
  document.getElementById('regForm').action = '/events/create-step2back';
} else if (n == 2) {
  document.getElementById('regForm').action = '/events/create-step3back';
} else {
}
}
