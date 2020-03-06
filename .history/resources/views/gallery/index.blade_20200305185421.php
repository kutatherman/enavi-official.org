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

 
            <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0"> Gallery</h1>

            <hr class="mt-2 mb-5">

            @if(count($galleries) > 0)
        
            <div class="row text-center text-lg-left">
                @foreach ($galleries as $album)
                <div class="col-lg-3 col-md-4 col-6">
                            <h3 class=" ">{{$album->name}}</h3>
                            @auth
                            <p><a href="photos/create/{{$album->id}}" class="badge badge-primary"> Upload Photos</a></p>
                            @endauth
                        <a href="{{route('galleryshow', $album->id)}}" class="d-block mb-4 h-100">
                                <img class="thumbnail" width="300px" height="300px" src="{{asset('gallery_covers') . '/' . $album->cover_image}}"  alt="{{$album->name}}">
                            </a>
                    </div>
                    @endforeach
            </div>
            @else
            <p>No Album To Display</p>
            @endif

<br><br>
           
            @auth
                <form action="{{route('gallerystore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                    <label for="name">Name</label>
                    <input type="text" class="form-control " value="{{old('name')}}" name="name" aria-describedby="name" placeholder="Album Name">
                    @error('name')
                    <span class="help-block" role="alert">{{$message}}</span>
                    @enderror    
                </div>
                    <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                        <label for="">Description</label>
                        <textarea type="text" name="description" class="form-control" placeholder="Album Description" >{{old('description')}}</textarea>
                        @error('description')
                        <span class="help-block" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                        <label for="">File</label>
                        <input type="file" name="cover_image" value="{{old('file')}}"  class="form-control"  >
                        @error('name')
                        <span class="help-block" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             @endauth
                    
        </div>



    @stop
