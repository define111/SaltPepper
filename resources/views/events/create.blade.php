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

            {{-- the collapsible row --}}
            <legend class='collapsible h5'>3. Zusatzoptionen &nbsp<i class="fa fa-caret-down align-top"></i></legend>
            <div class="form-row content">
              <legend class='h6'>3.1. Allgemein</legend>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  {{Form::label('duration', 'Zeit/Date (Min)')}}
                  {{Form::number('duration','4',['class' => 'form-control'])}}
                </div>
                <div class="col-md-4 mb-3">
                  {{Form::label('price', 'Preis (Euro)')}}
                  {{Form::number('price','15',['class' => 'form-control'])}}
                </div>
                <div class="col-md-4 mb-3">
                  {{Form::label('people', 'Personenzahl')}}
                  {{Form::number('people','20',['class' => 'form-control'])}}
                </div>
              </div>
              <legend class='h6'>3.2. Zeitplan</legend>
              <div class="form-row">
                <div class="col-md-5 mb-3">
                  {{Form::label('registration', 'Registrierung (Min)')}}
                  {{Form::number('registration','15',['class' => 'form-control'])}}
                </div>
                <div class="col-md-5 mb-3">
                  {{Form::label('break', 'Pause (Min)')}}
                  {{Form::number('break','15',['class' => 'form-control'])}}
                </div>
              </div>
              <legend class='h5'>3.3. Preisauswahl</legend>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  {{Form::label('pricedetails', 'Gleiche Preise für beide Gruppen?')}}
                  {{Form::select('pricedetails', ['ja' => 'Ja', 'nein' => 'nein'], 'ja', ['class' => 'form-control', 'id'=>"preisdetails"])}}
                </div>
              </div>
              <div class="form-row preisdetail">
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    {{Form::label('price', 'Preis Gruppe A (Euro)')}}
                    {{Form::number('price','',['class' => 'form-control'])}}
                  </div>
                  <div class="col-md-4 mb-3">
                    {{Form::label('price1', 'Preis Gruppe B (Euro)')}}
                    {{Form::number('price1','',['class' => 'form-control'])}}
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-auto mb-2">
                  {{Form::label('autofill', '3. Automatische Angaben', ['class' => 'h5'])}}
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                {{Form::label('enddate', 'Enddatum')}}
                {{Form::date('enddate','',['class' => 'form-control', 'readonly'=>"readonly"])}}
              </div>
              <div class="col-md-4 mb-3">
                {{Form::label('endtime', 'Endzeit')}}
                {{Form::time('endtime','',['class' => 'form-control', 'readonly'=>"readonly"])}}
              </div>
              <div class="col-md-4 mb-3">
                {{Form::label('profit', 'Dein Gewinn')}}
                {{Form::number('profit','',['class' => 'form-control', 'readonly'=>"readonly"])}}
              </div>
            </div>
              <div class="form-group">
                  {{Form::label('description', 'Description')}}
                  {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'The description of the event, Itinerary of the speed dating, Location decsription'])}}
              </div>
              <div class="form-group">
                  {{Form::label('tags', 'Tags')}}
                  {{Form::text('tags', '', ['class' => 'form-control', 'class' => 'narrow_button', 'placeholder' => 'Keywords'])}}
              </div>
              <div class="form-group">
                  {{Form::label('image', 'The background image')}}
                  <br>
                  {{Form::file('background_image')}}
              </div>
              {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
          </fieldset>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>



<script src={{ asset('js/create-event.js') }}></script>
{{-- Script for ck-editor --}}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection
