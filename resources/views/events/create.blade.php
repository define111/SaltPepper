@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Create event') }}</div>
        <div class="card-body">
          {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <fieldset>

            <legend class='h5'>1. Der Titel</legend>
            <div class="form-group row">
              <div class="col-lg-auto">
                {{Form::text('sideA', '', ['class' => 'form-control', 'class' => 'btn btn-outline-primary dropdown-toggle', 'placeholder' => 'Die erste Seite'])}}
              </div>
              <div class="col-md-2 col-form-label text-nowrap">
                <label>treffen auf</label>
              </div>
              <div class="col-lg-auto">
                {{Form::text('sideB', '', ['class' => 'form-control', 'class' => 'btn btn-outline-primary dropdown-toggle', 'placeholder' => 'Die zweite Seite'])}}
              </div>
            </div>

            <legend class='h5'>2. Die Details</legend>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                {{Form::label('city', 'Stadt')}}
                {{Form::select('city', ['' => 'Stadt', 'muenchen' => 'München', 'stuttgart' => 'Stuttgart'], 'muenchen', ['class' => 'form-control btn btn-outline-primary dropdown-toggle'])}}
              </div>
              <div class="col-md-4 mb-3">
                  {{Form::label('location', 'Ort')}}
                {{Form::select('location', ['' => 'Ort', 'parkcafe' => 'Parkcafe'], '', ['class' => 'form-control btn btn-outline-primary dropdown-toggle'])}}
              </div>
              <div class="col-md-4 mb-3">
                {{Form::label('category', 'Kategorie')}}
                {{Form::select('category', ['' => 'Kategorie', 'parkcafe' => 'Parkcafe'], '', ['class' => 'form-control btn btn-outline-primary dropdown-toggle'])}}
              </div>
            </div>
            <div id ="eventData">
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  {{Form::label('date', 'Datum')}}
                  {{Form::date('date','',['class' => 'form-control btn btn-outline-primary'])}}
                </div>
                <div class="col-md-4 mb-3">
                  {{Form::label('starttime', 'Startzeit')}}
                  {{Form::time('starttime','',['class' => 'form-control btn btn-outline-primary'])}}
                </div>
              </div>
            </div>

            {{-- the collapsible row --}}
            <legend class='collapsible h5'>3. Zusatzangaben &nbsp<i class="fa fa-caret-down align-top"></i></legend>
            <div class="form-row content">
              <legend class='h6'>3.1. Allgemein</legend>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  {{Form::label('duration', 'Zeit/Date (Min)')}}
                  {{Form::number('duration','4',['class' => 'form-control btn btn-outline-primary'])}}
                </div>
                <div class="col-md-4 mb-3">
                  {{Form::label('price', 'Preis (Euro)')}}
                  {{Form::number('price','15',['class' => 'form-control btn btn-outline-primary'])}}
                </div>
                <div class="col-md-4 mb-3">
                  {{Form::label('people', 'Personenzahl')}}
                  {{Form::number('people','20',['class' => 'form-control btn btn-outline-primary'])}}
                </div>
              </div>
              <legend class='h6'>3.2. Zeitplan</legend>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                  {{Form::label('registration', 'Registrierung (Min)')}}
                  {{Form::number('registration','15',['class' => 'form-control btn btn-outline-primary'])}}
                </div>
                <div class="col-md-3 mb-3">
                  {{Form::label('break', 'Pause (Min)')}}
                  {{Form::number('break','15',['class' => 'form-control btn btn-outline-primary'])}}
                </div>
              </div>
              <legend class='h5'>3.3. Preisauswahl</legend>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  {{Form::label('pricedetails', 'Gleiche Preise für beide Gruppen?')}}
                  {{Form::select('pricedetails', ['ja' => 'Ja', 'nein' => 'nein'], 'ja', ['class' => 'form-control btn btn-outline-primary dropdown-toggle', 'id'=>"preisdetails"])}}
                </div>
              </div>
              <div class="form-row preisdetail">
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    {{Form::label('price', 'Preis Gruppe A (Euro)')}}
                    {{Form::number('price','',['class' => 'form-control btn btn-outline-primary'])}}
                  </div>
                  <div class="col-md-4 mb-3">
                    {{Form::label('price1', 'Preis Gruppe B (Euro)')}}
                    {{Form::number('price1','',['class' => 'form-control btn btn-outline-primary'])}}
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

{{-- Script for ck-editor --}}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
<script src={{ asset('js/create-event.js') }}></script>
@endsection
