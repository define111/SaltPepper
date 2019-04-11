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
          <form method="POST" action="/events/create-step1" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <fieldset>

            <legend class='h5'>1. Die Teilnehmer</legend>
            <div class="form-group row">
              <div class="col-lg-auto">
                  <input class="form-control" placeholder="Die Kunden" name="sideA" type="text" value="@if(isset($event->sideA)) {{$event->sideA}}@else{{''}}@endif">
              </div>
              <div class="col-md-2 col-form-label text-nowrap">
                <label>treffen auf</label>
              </div>
              <div class="col-lg-auto">
                  <input class="form-control" placeholder="Die Unternhemer" name="sideB" type="text" value="@if(isset($event->sideB)) {{$event->sideB}}@else{{''}}@endif">
              </div>
            </div>

            <legend class='h5'>2. Die Details</legend>
            <div class="form-row">
              <div class="col-md-8 mb-3">
                <label for="location">Ort oder Adresse</label>
                    <input class="form-control" placeholder="Schreib hier den Namen" id="inpAddress" name="location" type="text" value="@if(isset($event->location)) {{$event->location}}@else{{''}}@endif">
                </div>
            </div>
            <div class="form-row">
              <div class="col-md-9 mb-3">
                <label for="category">Kategorie</label>
                  <select class="form-control" id="category" name="category">
                    <option value="">Wähle die Kategorie aus</option>
                    <option @if(isset($event->category) && $event->category == 'karriere')selected @else @endif value="karriere">Karriere</option>
                    <option @if(isset($event->category) && $event->category == 'haushalt')selected @else @endif value="haushalt">Haushalt</option>
                    <option @if(isset($event->category) && $event->category == 'kinder')selected @else @endif value="kinder">Kinder</option>
                  </select>
              </div>
            </div>
            <div id="toCalc">
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="date">Datum</label>
                    <input class="form-control toCalc" id="startdate" name="date" type="text" value="@if(isset($event->date)){{$event->date->format('d.m.Y')}}@else{{''}}@endif">
                </div>
                <div class="col-md-4 mb-3">
                  <label for="starttime">Startzeit</label>
                    <input class="clockpicker form-control toCalc" id="starttime" name="starttime" type="time" value="@if(isset($event->date)){{$event->date->format('H:i')}}@else{{''}}@endif">
                </div>
              </div>

              {{-- the collapsible row --}}
              <legend class='collapsible h5'>3. Zusatzoptionen &nbsp<i class="fa fa-caret-down align-top"></i></legend>
              <div class="form-row content">
                <legend class='h6'>3.1. Allgemein</legend>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="duration">Zeit/Date (Min)</label>
                    <input class="form-control" name="duration" type="number" value="@if(empty($event->duration)){{'4'}}@else{{$event->duration}}@endif" id="duration">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="price">Preis (Euro)</label>
                    <input class="form-control" name="price" type="number" value="@if(empty($event->price)){{'15'}}@else{{$event->price}}@endif" id="price">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="people">Personenzahl</label>
                    <input class="form-control" name="people" type="number" value="@if(empty($event->people)){{'20'}}@else{{$event->people}}@endif" id="people">
                  </div>
                </div>
                <legend class='h6'>3.2. Zeitplan</legend>
                <div class="form-row">
                  <div class="col-md-5 mb-3">
                    <label for="registration">Registrierung (Min)</label>
                    <input class="form-control" name="registration" type="number" value="@if(empty($event->registration)){{'15'}}@else{{$event->registration}}@endif" id="registration">
                  </div>
                  <div class="col-md-5 mb-3">
                    <label for="break">Pause (Min)</label>
                    <input class="form-control" name="break" type="number" value="@if(empty($event->break)){{'10'}}@else{{$event->break}}@endif" id="break">
                  </div>
                </div>

                <legend class='h5'>3.3. Preisauswahl</legend>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="pricedetails">Gleiche Preise f&uuml;r beide Gruppen?</label>
                    <select class="form-control" id="preisdetails" name="pricedetails">
                      <option value="ja" @if(empty($event->pricedetails) || $event->pricedetails == 'ja')selected @else @endif>Ja</option>
                      <option value="nein" @if(isset($event->pricedetails) && $event->pricedetails == 'nein')selected @else @endif>Nein</option></select>
                  </div>
                </div>
                <div class="form-row preisdetail">
                  <div class="col-md-4 mb-3">
                    <label id="labelpriceA" for="priceA"></label>
                    <input class="form-control" name="priceA" type="number" value="15" id="priceA">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label id="labelpriceB" for="priceB">Preis Gruppe B (Euro)</label>
                    <input class="form-control" name="priceB" type="number" value="25" id="priceB">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-auto mb-2">
                  <label for="autofill" class="h5">4. Info für Dich</label>
              </div>
            </div>
            <div class="form-row">
              {{-- Code zum anzeigen nur wenn ende tag anders als anfang --}}
              <div class="col-md-4 mb-3" id="endDateDiv">
                <label for="enddate">Enddatum</label>
                <input class="form-control" readonly="readonly" name="enddate" type="date" value="" id="enddate">
              </div>
              <div class="col-md-4 mb-3">
                <label for="endtime">Endzeit</label>
                <input class="form-control" readonly="readonly" name="endtime" type="time" value="" id="endtime">
              </div>
              <div class="col-md-4 mb-3">
                <label for="profit">Dein Gewinn (Euro)</label>
                <input class="form-control" readonly="readonly" name="profit" type="number" value="" id="profit">
              </div>
            </div>
            <button id="Btn" type="submit" class="btn btn-primary">Weiter</button>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src={{ asset('js/create-event.js') }}></script>
<script src={{ asset('js/autocomplete_address.js') }}></script>
<script src={{ asset('js/multi_step.js') }}></script>

@endsection
