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
        <div class="card-header">{{ __('Create event') }}</div>
        <div class="card-body">
          {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'autocomplete'=>"off"]) !!}
          <fieldset>

            <legend class='h5'>1. Die Teilnehmer</legend>
            <div class="form-group row">
              <div class="col-lg-auto">
                {{Form::text('sideA', '', ['class' => 'form-control', 'placeholder' => 'Die erste Seite'])}}
              </div>
              <div class="col-md-2 col-form-label text-nowrap">
                <label>treffen auf</label>
              </div>
              <div class="col-lg-auto">
                {{Form::text('sideB', '', ['class' => 'form-control', 'placeholder' => 'Die zweite Seite'])}}
              </div>
            </div>

            <legend class='h5'>2. Die Details</legend>
            <div class="form-row">
              <div class="col-md-8 mb-3">
                {{Form::label('location', 'Ort oder Adresse')}}
                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Schreib hier den Namen', 'id'=>"inpAddress"])}}
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-9 mb-3">
                {{Form::label('category', 'Kategorie')}}
                {{Form::select('category', ['' => 'Wähle die Kategorie aus', 'parkcafe' => 'Parkcafe'], '', ['class' => 'form-control'])}}
              </div>
            </div>
            <div class="form-row" id ="eventData">
              <div class="col-md-4 mb-3">
                {{Form::label('date', 'Datum')}}
                {{Form::text('date','',['class' => 'form-control','id'=>"datepicker"])}}
              </div>
              <div class="col-md-4 mb-3">
                {{Form::label('starttime', 'Startzeit')}}
                {{Form::time('starttime','',['class' => 'clockpicker form-control'])}}
              </div>
            </div>
              {{Form::submit('Weiter', ['class'=>'btn btn-primary'])}}
          </fieldset>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>



<script src={{ asset('js/autocomplete_address.js') }}></script>
@endsection
