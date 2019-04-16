@extends('layouts.app')

@section('content')


<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <label for="labelCard" class="col-md-4 col-form-label text-md-left">Create event</label>

            <!-- Circles which indicates the steps of the form: -->
            <div class="col-md-6">
              <span class="step align-bottom {{isset($event->step1) ? $event->step1 : ''}}"></span>
              <span class="step align-bottom {{isset($event->step2) ? $event->step2 : ''}}"></span>
              <span class="step active align-bottom {{isset($event->step3) ? $event->step3 : ''}}"></span>
            </div>
          </div>
        </div>
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
                <label for="managerEmail" class="col-md-4 col-form-label text-md-right">Deine Email</label>

                <div class="col-md-4">
                  <input class="form-control" placeholder="Für die Teilnehmer" name="managerEmail" type="text" value="@if(isset($event->managerEmail)) {{$event->managerEmail}}@else{{''}}@endif">
                </div>
                <fieldset disabled>
                <div class="col-sm-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="showEmail">
                    <label class="form-check-label" for="showEmail">
                      Sichtbar
                    </label>
                  </div>
                </div>
                </fieldset>
            </div>
            <div class="form-group row">
                <label for="paymentOpt" class="col-md-4 col-form-label text-md-right">Dein Gehalt auf</label>

                <div class="col-md-6">
                  <select class="form-control" id="paymentOpt" name="paymentOpt">
                    <option value="ja" @if(empty($event->paymentOpt) || $event->paymentOpt == 'Paypal')selected @else @endif>Paypal</option>
                    <option value="nein" @if(isset($event->paymentOpt) && $event->paymentOpt == 'Überweisung')selected @else @endif>Überweisung</option>
                  </select>
                </div>
            </div>
            <div class="Paypal">

            <div class="form-group row">
                <label for="account" class="col-md-4 col-form-label text-md-right">Account erstellen</label>

                <div class="col-md-6">
                  <select class="form-control" id="account" name="account">
                    <option value="ja" @if(empty($event->account) || $event->account == 'ja')selected @else @endif>Ja</option>
                    <option value="nein" @if(isset($event->account) && $event->account == 'nein')selected @else @endif>Nein</option>
                  </select>
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
