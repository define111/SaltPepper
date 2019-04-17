@extends('events.card-header')

@section('content-card')

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
@endsection
