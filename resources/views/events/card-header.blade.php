@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
                <div id="step1" class="progress-step is-active">Step One</div>
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
@endsection
