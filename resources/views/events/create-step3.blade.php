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
          <fieldset>
              <legend class='h5'>2. Die Details</legend>
              <table class="table">
                  <tr>
                      <td>Titel:</td>
                      <td><strong>@if(isset($event->sideA)) {{$event->sideA}}@else{{''}}@endif treffen auf @if(isset($event->sideB)) {{$event->sideB}}@else{{''}}@endif </strong></td>
                  </tr>
                  <tr>
                      <td>Ort:</td>
                      <td><strong>@if(isset($event->location)) {{$event->location}}@else{{''}}@endif</strong></td>
                  </tr>
                  <tr>
                      <td>Kategorie:</td>
                      <td><strong>@if(isset($event->category)) {{$event->category}}@else{{''}}@endif</strong></td>
                  </tr>
                  <tr>
                      <td>Datum:</td>
                      <td><strong>@if(isset($event->date)){{$event->date->format('d.m.Y')}}@else{{''}}@endif</strong></td>
                  </tr>
                  <tr>
                      <td>Startzeit:</td>
                      <td><strong>@if(isset($event->date)){{$event->date->format('H:i')}}@else{{''}}@endif</strong></td>
                  </tr>
                  <tr>
                      <td>Personeanzahl:</td>
                      <td><strong>@if(isset($event->people)){{$event->people}}@else{{''}}@endif</strong></td>
                  </tr>
                  <tr>
                      <td>Beschreibung:</td>
                      <td><strong>@if(isset($event->description)){!!$event->description!!}@else{{''}}@endif</strong></td>
                  </tr>


                  {{-- <tr>
                      <td>Product Image:</td>
                      <td><strong><img alt="Product Image" src="/storage/productimg/{{$product->productImg}}"/></strong></td>
                  </tr> --}}
              </table>
              <button type="submit" class="btn btn-primary" onclick="nextPrev(2)">Daten ändern</button>
              <button type="submit" class="btn_secondary btn">bizDate erstellen</button>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src={{ asset('js/multi_step.js') }}></script>
@endsection
