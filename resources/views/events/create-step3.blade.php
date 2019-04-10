@extends('layouts.app')

@section('content')


<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Create event') }}</div>
        <div class="card-body">
          <form method="POST" action="/events/create-step3" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
          <fieldset>
              <legend class='h5'>2. Die Details</legend>
              <table class="table">
                  <tr>
                      <td>Product Name:</td>
                      <td><strong>{{$event->sideA}}</strong></td>
                  </tr>
                  <tr>
                      <td>Product Amount:</td>
                      <td><strong>{{$event->sideA}}</strong></td>
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

<script src={{ asset('js/create-event.js') }}></script>
@endsection
