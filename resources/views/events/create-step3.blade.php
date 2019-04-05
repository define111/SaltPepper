@extends('layouts.app')

@section('content')


<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Create event') }}</div>
        <div class="card-body">
          {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'autocomplete'=>"off"]) !!}
          <fieldset>
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
              {{Form::submit('Zurück', ['class'=>'btn btn-primary', 'formaction'=>"/events/create-step2"])}}
              {{Form::submit('bizDate erstellen', ['class'=>'btn_secondary btn'])}}
          </fieldset>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

<script src={{ asset('js/create-event.js') }}></script>
@endsection
