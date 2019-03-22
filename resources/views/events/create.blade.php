@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Create event') }}</div>
        <div class="card-body">
          {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <div class="form-row align-items-center">
            <div class="col-md-auto mb-2">
                {{Form::label('Title', '1. Der Titel', ['class' => 'h5'])}}
            </div>
          </div>
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
          <div class="form-row ">
            <div class="col-md-auto mb-2">
                {{Form::label('Title', '2. Die Details', ['class' => 'h5'])}}
            </div>
          </div>
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
              <div class="col-md-4 mb-3">
                {{Form::label('duration', 'Zeit/Date (Min)')}}
                {{Form::number('duration','5',['class' => 'form-control btn btn-outline-primary'])}}
              </div>
            </div>
            <div class="form-row justify-content-md-center align-items-center">
              <div class="col-md-3 mb-3">
                {{Form::label('people', 'Personenzahl')}}
                {{Form::number('people','',['class' => 'form-control btn btn-outline-primary'])}}
              </div>
              <div class="col-md-3 mb-3">
                {{Form::label('price', 'Preis (Euro)')}}
                {{Form::number('price','',['class' => 'form-control btn btn-outline-primary'])}}
              </div>
            </div>
          </div>
          {{-- the collpasible row --}}
          <div class="form-row collapsible">
            <div class="col-md-auto mb-2">
                {{Form::label('Title', '3. Zusatzangaben', ['class' => 'h5'])}}
            </div>
          </div>
          <div class="form-row content">
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
