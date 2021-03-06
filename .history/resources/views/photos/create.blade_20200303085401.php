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
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                    <label for="name">Name</label>
                    <input type="text" class="form-control " name="name" aria-describedby="name" placeholder="Album Name">
                    @error('name')
                    <span class="help-block" role="alert">{{$message}}</span>
                    @enderror    
               
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             @endauth

    @stop

        </div>