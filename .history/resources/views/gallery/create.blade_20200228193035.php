@extends('layouts.default', ['title' => 'gallery'])
@section('content')

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="container">
@auth
<h3>create ALbum</h3>
                {!! Form::open(['action' => 'GalleryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ Form::text('description', '', ['placeholder' => 'Album Name']) }}
                {{ Form::textarea('description', '', ['placeholder' => 'Album Description']) }}
                {{Form::file('cover_image')}}
                {{Form::submit('submit')}}
                {!! Form::close() !!}
        </div>

    @endauth

    @stop