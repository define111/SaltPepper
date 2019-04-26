@extends('events.card-header')

@section('content-card')

{{-- For address autocomplete --}}
<script src="{{mix('js/typeahead.bundle.js')}}"></script>
<script src="{{mix('js/typeahead-address-photon.js')}}"></script>

{{-- for the clockpicker --}}
<link href="{{ URL::asset('/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
<script src="{{mix('/js/bootstrap-clockpicker.min.js')}}"></script>

{{-- for the calender --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="card-body">
  <form method="POST" action="/events/create-step1" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="form-group row">
        <label for="sideA" class="col-md-4 col-form-label text-md-right">Teilnehmergruppe A</label>

        <div class="col-md-6">
          <input class="form-control" placeholder="Die Kunden" name="sideA" type="text" value="{{isset($event->sideA) ? $event->sideA : ''}}" autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="sideB" class="col-md-4 col-form-label text-md-right">Teilnehmergruppe B</label>

        <div class="col-md-6">
            <input class="form-control" id="Test" placeholder="Die Unternhemer" name="sideB" type="text" value="{{isset($event->sideB) ? $event->sideB : ''}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="location" class="col-md-4 col-form-label text-md-right">Ort oder Adresse</label>

        <div class="col-md-6">
            <input class="form-control" placeholder="Schreib hier den Namen" id="inpAddress" name="location" type="text" value="{{isset($event->location) ? $event->location : ''}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">Kategorie</label>

        <div class="col-md-6">
          <select class="form-control" id="category" name="category">
            <option value="">Wähle die Kategorie aus</option>
            <option @if(isset($event->category) && $event->category == 'karriere')selected @else @endif value="karriere">Karriere</option>
            <option @if(isset($event->category) && $event->category == 'haushalt')selected @else @endif value="haushalt">Haushalt</option>
            <option @if(isset($event->category) && $event->category == 'kinder')selected @else @endif value="kinder">Kinder</option>
          </select>
        </div>
    </div>

    {{-- Data that will be needed for the calculation --}}
    <div id="toCalc">

      <div class="form-group row">
          <label for="starttime" class="col-md-4 col-form-label text-md-right">Datum/Startzeit</label>

          <div class="col-md-6">
            <div class="form-row">
              <div class="col-md-6">
                <input class="form-control" id="startdate" name="startdate" type="text" value="{{isset($event->date) ? $event->date->format('d.m.Y') : ''}}">
              </div>
              <div class="col-md-6">
                <input class="clockpicker form-control" id="starttime" name="starttime" type="time" value="{{isset($event->date) ? $event->date->format('H:i') : ''}}">
              </div>
            </div>
          </div>
      </div>

      {{-- additional options --}}
      <div class="form-group row collapsible">
          <label for="email" class="col-md-4 col-form-label text-md-right">Zusatzoptionen</label>

          <div class="col-md-6">
              <div type="button" class="btn btn-muted" id="details">Zusatzoptionen einblenden</div>
          </div>
      </div>
      {{-- collapsible starts --}}
      <div class="content">

        <div class="form-group row">
            <label for="duration" class="col-md-4 col-form-label text-md-right">Zeit/Date (Min)</label>

            <div class="col-md-6">
                <input class="form-control" name="duration" type="number" value="{{isset($event->duration) ? $event->duration : '4'}}" id="duration">
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-md-4 col-form-label text-md-right">Preis (Euro)</label>

            <div class="col-md-6">
                <input class="form-control" name="price" type="number" value="{{isset($event->price) ? $event->price : '15'}}" id="price">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Personen / Gruppe</label>

            <div class="col-md-6">
                <input class="form-control" name="people" type="number" value="{{isset($event->people) ? $event->people : '20'}}" id="people">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Registrierung (min)</label>

            <div class="col-md-6">
                <input class="form-control" name="registration" type="number" value="{{isset($event->registration) ? $event->registration : '15'}}" id="registration">
            </div>
        </div>

        <div class="form-group row">
            <label for="break" class="col-md-4 col-form-label text-md-right">Pause (min)</label>

            <div class="col-md-6">
                <input class="form-control" name="break" type="number" value="{{isset($event->break) ? $event->break : '10'}}" id="break">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Gleiche Preise für beide Gruppen?</label>

            <div class="col-md-6">
              <select class="form-control" id="preisdetails" name="pricedetails">
                <option value="ja" @if(empty($event->pricedetails) || $event->pricedetails == 'ja')selected @else @endif>Ja</option>
                <option value="nein" @if(isset($event->pricedetails) && $event->pricedetails == 'nein')selected @else @endif>Nein</option>
              </select>
            </div>
        </div>
        <div class="preisdetail">
          <div class="form-group row">
              <label id="labelpriceA" for="priceA" class="col-md-4 col-form-label text-md-right"></label>

              <div class="col-md-6">
                  <input class="form-control" name="priceA" type="number" value="15" id="priceA">
              </div>
          </div>
          <div class="form-group row">
              <label id="labelpriceB" for="priceB" class="col-md-4 col-form-label text-md-right"></label>

              <div class="col-md-6">
                  <input class="form-control" name="priceB" type="number" value="15" id="priceB">
              </div>
          </div>
        </div>
      </div>
      {{-- collapsible ends --}}
    </div>
    {{-- toCalc ends --}}

    {{-- show the endday only if starday!=endday --}}
    <div class="form-group row" id="endDateDiv">
        <label for="enddate" class="col-md-4 col-form-label text-md-right">Enddatum</label>

        <div class="col-md-6">
            <input class="form-control" readonly="readonly" name="enddate" type="date" value="" id="enddate">
        </div>
    </div>

    <div class="form-group row">
        <label for="enddate" class="col-md-4 col-form-label text-md-right">Endzeit</label>

        <div class="col-md-6">
            <input class="form-control" readonly="readonly" name="endtime" type="time" value="" id="endtime">
        </div>
    </div>

    <div class="form-group row">
        <label for="profit" class="col-md-4 col-form-label text-md-right">Dein Gewinn (Euro)</label>

        <div class="col-md-6">
            <input class="form-control" readonly="readonly" name="profit" type="number" value="" id="profit">
        </div>
    </div>


    <button id="Btn" type="submit" class="btn btn-primary" onclick="checkStep(0)">Weiter</button>
  </form>
</div>

<script type="text/javascript">
var session_event='{{$event?$event:''}}';
</script>
<script src={{ asset('js/create-event.js') }}></script>
<script src={{ asset('js/multi_step.js') }}></script>

@endsection
