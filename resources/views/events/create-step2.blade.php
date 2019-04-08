@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Create event') }}</div>
        <div class="card-body">
          <form method="POST" action="/events/create-step2" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <fieldset>
            <legend class='h5'>3. Hintergrundsfoto</legend>
            <div class="form-group row">
              <div class="col-lg-auto">
                <input name="background_image" type="file">
              </div>
            </div>
            <legend class='h5'>3. Beschreibung</legend>
            <div class="form-group row">
              <div class="col-lg-auto">
                <textarea id="article-ckeditor" class="form-control" name="description" cols="50" rows="10">@if(isset($event->description)) {{$event->description}}@else{{'Biz ​​Dating ist der perfekte Weg, um bis zu 20 potentielle Geschäftspartner an einem Abend zu treffen.
                  Wenn Sie ankommen, werden Sie von Ihrem Biz Dater-Gastgeber begrüßt und angemeldet.
                  Die Kunden bleiben normalerweise an den Tischen sitzen, während die Unternehmer alle 4 Minuten rotieren, nachdem die Klingel geklingelt hat.
                  Bringen Sie ein Notitzblock zu der bizDate mit und machen Sie sich Notitzen über die interessanten Dates.
                  Nach der Veranstaltung bekommen Sie eine Email mit dem Link zur Auswertung und Bewertung von dem bizDate.
                  Bei einem Match können Sie Ihre potentiellen Geschäftspartner über unser sicheres Kommunikationssystem kontaktieren um weiter Details abzuklären. Sie können dann auch Ihre Kontakdaten selber austauschen.'}}@endif
                </textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" formaction="/events/create-step2" formmethod="POST" formenctype="multipart/form-data">Zurück</button>
            <a type="button" href="/events/create-step1" class="btn btn-primary">Zurück</a>
            <a type="button" href="/events/create-step3" class="btn btn-primary">Weiter</a>
          </fieldset>
          </form>

          {{-- {!! Form::open(['action' => 'EventsController@postCreateStep2', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'autocomplete'=>"off"]) !!}
          <fieldset>
            <legend class='h5'>3. Hintergrundsfoto</legend>
            <div class="form-group row">
              <div class="col-lg-auto">
                {{Form::file('background_image')}}
              </div>
            </div>
            <legend class='h5'>3. Beschreibung</legend>
            <div class="form-group row">
              <div class="col-lg-auto">
                {{Form::textarea('description', 'Speed ​​Dating ist der perfekte Weg, um bis zu 20 Termine in einer Nacht zu treffen. Kommen Sie mit einem Lächeln und einem offenen Geist.
                  Wenn Sie ankommen, werden Sie von Ihrem SpeedDater-Gastgeber begrüßt und angemeldet.
                  Die Kunden bleiben normalerweise an den Tischen sitzen, während die Unternehmer alle 4 Minuten rotieren, wenn die Klingel klingelt.
                  Bringen Sie ein Notitzblock zu der bizDate mit und machen Sie sich Notitzen über Ihre Dates. Notieren Sie sich vor allem die Namen von den interessanten Gesprächspartnern.
                  Nach der Veranstaltung bekommen Sie eine Email mit dem Link zur Auswertung und Veranstaltungsbewertung. Bei einem "Match" bekommen Sie einen weiteren Email.
                  Sie können Ihre Date kontaktieren indem Sie auf die zweite Email direkt antworten. Wir teilen Ihre Adressdaten weden den Datemanagern noch den anderen Dateteilnehmern.
                  Wenn Sie die Kontaktdaten austauschen möchten, so tuhen Sie das selber mit unserem sicherem Mailing System.
                  Falls die Veranstaltung abgesagt wird, bekommen Sie den Betrag vollständig rückerstattet.', ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
              </div>
            </div>
              {{Form::submit('Zurück', ['class'=>'btn btn-primary', 'formaction'=>"/events/create-step1"])}}
              {{Form::submit('Weiter', ['class'=>'btn btn-primary', 'formaction'=>"/events/create-step3"])}}
          </fieldset>
          {!! Form::close() !!} --}}
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
@endsection
