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
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                
                    @endforeach
            </div>
            @else
            <p>No Album To Display</p>
            @endif
            
            
          


            <div class="row text-center text-lg-left">
                <div class="col-lg-3 col-md-4 col-6">
                    <h3 class=" ">ENAVI CEO and Board Secretary...</h3>
                    <a href="{{route('gallery3')}}" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/secretary/44.jpg')}}"  alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <h3 class=" ">ENAVI CEO organises 2019 Commonwealth...</h3>
                    <a href="{{route('gallery4')}}" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/organises/222.jpg')}}"   alt="">
                    </a>
                </div>
            </div>
<br><br>
<div class="col-lg-3 col-md-4 col-6">
    <h3 class=" ">{{$album->name}}</h3>
<a href="/gallery/{{$album->id}}" class="d-block mb-4 h-100">
        <img class="thumbnail" width="300px" height="300px" src="{{asset('gallery_covers') . '/' . $album->cover_image}}"  alt="{{$album->name}}">
    </a>
</div>
           
            @auth
                <form action="{{route('gallerystore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                    <label for="name">Name</label>
                    <input type="text" class="form-control " name="name" aria-describedby="name" placeholder="Album Name">
                    @error('name')
                    <span class="help-block" role="alert">{{$message}}</span>
                    @enderror    
                </div>
                    <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                        <label for="">Description</label>
                        <textarea type="text" name="description" class="form-control" placeholder="Album Description" ></textarea>
                        @error('description')
                        <span class="help-block" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                        <label for="">File</label>
                        <input type="file" name="cover_image" class="form-control"  >
                        @error('name')
                        <span class="help-block" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             @endauth
                    
        </div>



    @stop
