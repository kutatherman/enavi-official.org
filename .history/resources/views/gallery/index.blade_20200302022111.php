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
        
            <div class="row ">
                @foreach ($galleries as $album)
                <div class="card col-md-4" style="width: 18rem;">
                    <div class="card mb-4 shadow-sm">
                        <img class="thumbnail card-img-top"  src="{{asset('gallery_covers') . '/' . $album->cover_image}}"  alt="{{$album->name}}">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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
