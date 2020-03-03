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
           

    <form action="{{route('gallerystore')}}" method="POST" enctype="multipart/form-data">
       
        <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" aria-describedby="name" placeholder="Album Name">
        </div>
        <div class="class="form-group>
            <label for="">Description</label>
            <textarea type="text" name="description" class="form-control" placeholder="Album Description" ></textarea>
        </div>
        <div class="class="form-group>
            <label for="">Fild</label>
            <input type="file" name="name" class="form-control"  >
            <small class="badge"><strong>Maximun 1M</strong></small>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
   </form>
        
        </div>



    @stop
