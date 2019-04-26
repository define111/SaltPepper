var n, m;

const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');
const step3 = document.getElementById('step3');
const step4 = document.getElementById('step4');

// For the buttons
window.checkButton = function(n) {
  if (n == 1) {
    document.getElementById('regForm').action = '/events/create-step2back';
  } else if (n == 2) {
    document.getElementById('regForm').action = '/events/create-step3back';
  } else {
  }
}

// For the progress bar
window.checkStep = function(m) {
  if (m == 0) {
    step1.classList.remove("is-active");
    step1.classList.add("is-complete");
    step2.classList.add("is-active");

  } else if (m == 1) {
    step2.classList.remove("is-active");
    step2.classList.add("is-complete");
    step3.classList.add("is-active");

  } else if (n == 2) {
    step3.classList.remove("is-active");
    step3.classList.add("is-complete");
    step4.classList.add("is-active");

  } else if (n == 3) {
    step4.classList.remove("is-active");
    step4.classList.add("is-complete");

  }
};

function checkbutton(n) {
  if (n == 1) {
    document.getElementById('regForm').action = '/events/create-step2back';

  } else if (n == 1) {
    document.getElementById('regForm').action = '/events/create-step3back';

  } else if (n == 2) {
    document.getElementById('regForm').action = '/events/create-step4back';

  }
}
