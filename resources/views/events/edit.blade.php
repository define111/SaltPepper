@extends('layouts.app')

@section('content')
    <h1>Edit event</h1>
    {!! Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{-- <div class="form-group">
            {{Form::label('title', 'The title of the event')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('title', 'The title of the event')}}
            <br>
            {{Form::text('sideA', $event->sideA, ['class' => 'form-control', 'class' => 'narrow_button' ,'placeholder' => 'Side A'])}}
            {{Form::label('vs', 'vs.')}}
            {{Form::text('sideB', $event->sideB, ['class' => 'form-control', 'class' => 'narrow_button', 'placeholder' => 'Side B'])}}
        </div>
        <div class="form-group">
            {{Form::label('city', 'City')}}
            {{Form::select('city', ['muenchen' => 'München', 'stuttgart' => 'Stuttgart'], $event->city)}}
            {{Form::label('place', 'Place')}}
            {{Form::select('place', ['parkcafe' => 'Parkcafe'], $event->place)}}
            {{Form::text('address', $event->address, ['placeholder' => 'Autofill address.'])}}
        </div>
        <div class="form-group">
            {{Form::label('date', 'Date')}}
            {{Form::date('date', $event->date->format('Y-m-d'))}} &emsp; &emsp; &emsp; &emsp;
            {{Form::label('time', 'Time')}}
            {{Form::time('time', $event->date->format('H:i'))}}
        </div>
        <div class="form-group">
            {{Form::label('number_of_persons', 'The Number of persons per gr')}}
            {{Form::number('number_of_persons', $event->number_of_persons, ['class' => 'form-control', 'class' => 'narrow_button' ,'id' => 'narrow_button', 'placeholder' => 'The Number of persons per Group'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'The price per person in Euro.')}}
            {{Form::number('price', $event->price, ['class' => 'form-control', 'class' => 'narrow_button' ,'placeholder' => 'Price in Euro'])}}
        </div>
        {{Form::label('category', 'Category')}}
        {{Form::select('category', ['sport' => 'Sport', 'love' => 'Love', 'art' => 'Art'])}}
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $event->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'The description of the event, Itinerary of the speed dating, Location decsription'])}}
        </div>
        <div class="form-group">
            {{Form::label('tags', 'Tags')}}
            {{Form::text('tags', $event->tags, ['class' => 'form-control', 'class' => 'narrow_button', 'placeholder' => 'Keywords'])}}
        </div>
        <div class="form-group">
            {{Form::label('image', 'The background image')}}
            <br>
            {{Form::file('background_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    {{-- Script for ck-editor --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection
