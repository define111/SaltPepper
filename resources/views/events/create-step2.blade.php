@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Create event') }}</div>
        <div class="card-body">
          <form id="regForm" method="POST" action="/events/create-step2" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <div class="form-group row">
              <label for="background_image" class="col-md-4 col-form-label text-md-right">Hintergrundsfoto</label>

              <div class="col-md-6">
                <input name="background_image" type="file" autofocus>
              </div>
          </div>

          <div class="form-group row">
              <label for="participants" class="col-md-4 col-form-label text-md-right">Die Teilnehmer</label>

              <div class="col-md-6">
                <textarea class="form-control" placeholder="Beschreibe die Teilnehmer vom Event möglichst genau" name="participants" type="text" value="@if(isset($event->participants)) {{$event->participants}}@else{{''}}@endif"></textarea>
              </div>
          </div>

          <div class="form-group row">
              <label for="additional" class="col-md-4 col-form-label text-md-right">Weitere Angaben</label>

              <div class="col-md-6">
                <textarea class="form-control" placeholder="Gibt es noch etwas, was die Teilnehmer wissen sollen?" name="additional" type="text" value="@if(isset($event->additional)) {{$event->additional}}@else{{''}}@endif"></textarea>
              </div>
          </div>
            <button type="submit" class="btn btn-primary" onclick="nextPrev(1)">Zurück</button>
            <button type="submit" class="btn btn-primary">Weiter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src={{ asset('js/multi_step.js') }}></script>
@endsection
