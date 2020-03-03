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

<h3>Create photos for this album</h3>
    {{-- <form action="{{route('photosstore')}}" class="dropzone" >
        {{csrf_field()}}
    </form> --}}

    @auth
                <form action="{{route('photosstore')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                <input type="hidden" name="album_id" value="{{$albumId }}">
                    <div class="form-group {{$errors->has('photo') ? 'has-error' : ''}}">
                    <input type="file" class="form-control " name="photo" aria-describedby="name" multiple placeholder="Album Name">
                    @error('photo')
                    <span class="help-block" role="alert">{{$message}}</span>
                    @enderror    
               
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             @endauth

    @stop

        </div>