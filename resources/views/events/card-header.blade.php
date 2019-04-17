@extends('layouts.app')

@section('content')

{{-- For address autocomplete --}}
<script src="{{mix('js/typeahead.bundle.js')}}"></script>
<script src="{{mix('js/typeahead-address-photon.js')}}"></script>

{{-- for the clockpicker --}}
<link href="{{ URL::asset('/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
<script src="{{mix('/js/bootstrap-clockpicker.min.js')}}"></script>

{{-- for the calender --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
        <section id="">
          @yield('content-card')
        </section>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
var session_event='{{$event?$event:''}}';
</script>
<script src={{ asset('js/create-event.js') }}></script>
<script src={{ asset('js/multi_step.js') }}></script>

@endsection
