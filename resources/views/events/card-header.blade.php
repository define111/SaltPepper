@extends('layouts.app')

@section('content')


<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <label for="labelCard" class="col-md-4 col-form-label text-md-left">Create event</label>
            <!-- Circles which indicates the steps of the form: -->
            <div class="col-md-6">
              <span class="step active align-bottom {{isset($event->step1) ? $event->step1 : ''}}"></span>
              <span class="step align-bottom {{isset($event->step2) ? $event->step2 : ''}}"></span>
              <span class="step align-bottom {{isset($event->step3) ? $event->step3 : ''}}"></span>
            </div>
            <h6> {{time()}} </h6>
          </div>
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
