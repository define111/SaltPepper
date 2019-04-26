@extends('layouts.app')

@section('content')


<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <label for="labelCard" class="col-md-4 col-form-label text-md-left">Create event</label>
          </div>
            <div class="progress">
                <div class="progress-track"></div>
                <div id="step1" class="progress-step">Step One</div>
                <div id="step2" class="progress-step">Step two</div>
                <div id="step3" class="progress-step">Step three</div>
                <div id="step4" class="progress-step">Complete</div>
            </div>

            {{-- <ul class="progressbar">
                <li class="active">Details</li>
                <li>Beschreibung & Foto</li>
                <li>Angaben zum Datemanager</li>
                {{-- mit login erstellen (wie db) Vorteile: Vertrauen von Kunden, schnellere Abwicklung, Profil erstellen --}}
                {{-- <li>Zahlung & Erstellen</li>
                {{-- wie möchte er seine Zahlung erhalten, Überweisung, Paypal --}}
            {{-- </ul> --}}

        </div>
        <section id="data-pjax-container">
          @yield('content-card')
        </section>
      </div>
    </div>
  </div>
</div>

<script src={{ asset('js/multi_step.js') }}></script>
<script type="text/javascript">

$(document).ready(function(){
       if ($.support.pjax) {
           $.pjax.defaults.timeout = 2000; // time in milliseconds
           $(document).on('submit', 'form', function(event) {
             // event.preventDefault(); // stop default submit behavior
             $.pjax.submit(event, '#data-pjax-container')
           })
       }
   });
</script>

{{-- For the progress bar --}}
<script type="text/javascript">
let step = 'step1';

const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');
const step3 = document.getElementById('step3');
const step4 = document.getElementById('step4');

function next() {
  if (step === 'step1') {
    step = 'step2';
    step1.classList.remove("is-active");
    step1.classList.add("is-complete");
    step2.classList.add("is-active");

  } else if (step === 'step2') {
    step = 'step3';
    step2.classList.remove("is-active");
    step2.classList.add("is-complete");
    step3.classList.add("is-active");

  } else if (step === 'step3') {
    step = 'step4d';
    step3.classList.remove("is-active");
    step3.classList.add("is-complete");
    step4.classList.add("is-active");

  } else if (step === 'step4d') {
    step = 'complete';
    step4.classList.remove("is-active");
    step4.classList.add("is-complete");

  } else if (step === 'complete') {
    step = 'step1';
    step4.classList.remove("is-complete");
    step3.classList.remove("is-complete");
    step2.classList.remove("is-complete");
    step1.classList.remove("is-complete");
    step1.classList.add("is-active");
  }
}
</script>
@endsection
