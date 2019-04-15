@extends('layouts.app')

@section('content')


<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Create event') }}</div>
        <div class="card-body">
          <form id="regForm" method="POST" action="/events/store" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="form-group row">

            </div>
            <div class="form-group row">
                <label for="managerName" class="col-md-4 col-form-label text-md-right">Dein Vorname</label>

                <div class="col-md-4">
                  <input class="form-control" placeholder="" name="manager" type="text" value="@if(isset($event->managerName)) {{$event->managerName}}@else{{''}}@endif">
                </div>
                <fieldset disabled>
                <div class="col-sm-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" checked="checked" name="showName">
                    <label class="form-check-label" for="showName">
                      Sichtbar
                    </label>
                  </div>
                </div>
                </fieldset>
            </div>

            <div class="form-group row">
                <label for="managerSurname" class="col-md-4 col-form-label text-md-right">Dein Nachname</label>

                <div class="col-md-4">
                  <input class="form-control" placeholder="" name="managerSurname" type="text" value="@if(isset($event->managerSurname)) {{$event->managerSurname}}@else{{''}}@endif">
                </div>
                <div class="col-sm-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="showSurname">
                    <label class="form-check-label" for="showSurname">
                      Sichtbar
                    </label>
                  </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="managerEmail" class="col-md-4 col-form-label text-md-right">Deine Email</label>

                <div class="col-md-4">
                  <input class="form-control" placeholder="Für die Rechnung" name="managerEmail" type="text" value="@if(isset($event->managerEmail)) {{$event->managerEmail}}@else{{''}}@endif">
                </div>
            </div>
            <div class="form-group row">
                <label for="managerAddress" class="col-md-4 col-form-label text-md-right">Deine Adresse</label>

                <div class="col-md-4">
                  <input class="form-control" placeholder="Für die Rechnung" name="managerAddress" type="text" value="@if(isset($event->managerAddress)) {{$event->managerAddress}}@else{{''}}@endif">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" onclick="nextPrev(2)">Zurück</button>
            <button type="submit" class="btn_secondary btn">bizDate erstellen</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src={{ asset('js/multi_step.js') }}></script>
@endsection
