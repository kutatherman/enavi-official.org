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

<h3>create ALbum</h3>
    <form action="{{url('gallery')}}" class="dropzone" >
        {{csrf_field()}}
    </form>

    @stop