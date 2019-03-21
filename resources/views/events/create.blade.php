@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Create event') }}</div>
        <div class="card-body">
          {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <div class="form-row justify-content-md-center text-center align-items-center">
            <div class="col-lg-auto mb-3">
              {{Form::text('sideA', '', ['class' => 'form-control', 'class' => 'btn btn-outline-primary', 'placeholder' => 'Die erste Seite'])}}
            </div>
            <div class="col-md-2 mb-3">
                {{Form::label('vs', 'treffen auf', ['class' => 'text-center'])}}
            </div>
            <div class="col-lg-auto mb-3">
              {{Form::text('sideB', '', ['class' => 'form-control', 'class' => 'btn btn-outline-primary', 'placeholder' => 'Die zweite Seite'])}}
            </div>
          </div>
          <div class="form-row align-items-center">
            <div class="col-auto mb-3">
              {{Form::select('city', ['' => 'Stadt', 'muenchen' => 'München', 'stuttgart' => 'Stuttgart'], 'muenchen', ['class' => 'btn btn-outline-primary dropdown-toggle'])}}
            </div>
            <div class="col-auto mb-3">
              {{Form::select('place', ['' => 'Location', 'parkcafe' => 'Parkcafe'], '', ['class' => 'btn btn-outline-primary dropdown-toggle'])}}
            </div>
            <div class="col-auto mb-3">
              {{Form::text('address', '', ['class' => 'form-control','placeholder' => 'Autofill address.'])}}
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-3 mb-3">
              {{Form::label('date', 'Datum')}}
              {{Form::date('date','',['class' => 'form-control'])}}
            </div>
            <div class="col-md-3 mb-3">
              {{Form::label('starttime', 'Startzeit')}}
              {{Form::time('starttime','',['class' => 'form-control'])}}
            </div>
            <div class="col-md-3 mb-3">
              {{Form::label('people', 'Personenzahl')}}
              {{Form::number('people','',['class' => 'form-control'])}}
            </div>
            <div class="col-md-3 mb-3">
              {{Form::label('duration', 'Zeit (Min)')}}
              {{Form::number('duration','',['class' => 'form-control'])}}
            </div>
          </div>
          <div class="col-md-4 mb-3">
            {{Form::label('endtime', 'Endzeit')}}
            {{Form::time('endtime','',['class' => 'form-control'])}}
          </div>
            </div>
            <div class="form-group">
                {{Form::label('number_of_persons', 'The Number of persons per gr')}}
                {{Form::number('number_of_persons', '', ['class' => 'form-control', 'class' => 'narrow_button' , 'placeholder' => 'The Number of persons per Group'])}}
            </div>
            <div class="form-group">
                {{Form::label('price', 'The price per person in Euro.')}}
                {{Form::number('price', '', ['class' => 'form-control', 'class' => 'narrow_button' ,'placeholder' => 'Price in Euro'])}}
            </div>
            {{Form::label('category', 'Category')}}
            {{Form::select('category', ['sport' => 'Sport', 'love' => 'Love', 'art' => 'Art'])}}
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
<script>
document.getElementById("duration").addEventListener("change", function() {
  var startdateDoc = document.getElementById("date").value;
  var starttimeDoc = document.getElementById("starttime").value;
  var startdate = startdateDoc.concat('T', starttimeDoc,':00');
  var start = new Date(startdate);
  var numberOfPeople = Number(document.getElementById("people").value);
  var durationOfDate = Number(this.value);
  var durationOfDates = durationOfDate*numberOfPeople;
  var endtime = start.setMinutes(start.getMinutes()+durationOfDates);
  var endtimeDoc = new Date (endtime);
  document.getElementById('endtime').value=endtimeDoc.toLocaleString('de-DE',{hour: 'numeric', minute: 'numeric'});
});
//   var enddtime = new Date();
//   enddtime = enddtime.getTime();
//   console.log(enddtime);
//   // var eventdata = document.forms["eventdata"];
//   var starttime = eventdata.elements["starttime"].value;
//   starttime = new Date(starttime);
//   var duration = eventdata.elements["duration"];
//   duration = new Date(duration);
//   if(starttime != "")
//          {
//              endtime = starttime + duration;
//          };
//   eventdata.elements["endtime"]=endtime;
// });
</script>
@endsection
