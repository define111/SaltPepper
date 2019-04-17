@extends('events.card-header')

@section('content-card')

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
                <textarea class="form-control" placeholder="Beschreibe die Teilnehmer vom Event möglichst genau" name="participants" type="text" value="">{{$event->participants ? $event->participants : ''}}</textarea>
              </div>
          </div>

          <div class="form-group row">
              <label for="additional" class="col-md-4 col-form-label text-md-right">Weitere Angaben</label>

              <div class="col-md-6">
                <textarea class="form-control" placeholder="Gibt es noch etwas, was die Teilnehmer wissen sollen?" name="additional" type="text" value="">{{$event->additional ? $event->additional : ''}}</textarea>
              </div>
          </div>
            <button type="submit" class="btn btn-primary" onclick="nextPrev(1)">Zurück</button>
            <button type="submit" class="btn btn-primary">Weiter</button>
          </form>
        </div>

@endsection
