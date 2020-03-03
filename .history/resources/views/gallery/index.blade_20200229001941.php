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
            <?php 
                $colcount = count($galleries);
                $i = 1;
            ?>
            <div id="albums">
                <div class="row text-center text-lg-left">
                    @foreach ($galleries as $album)
                    @if($i == $colcount)
                        <div class="col-lg-3 col-md-4 col-6">
                            <h3 class=" ">{{$album->name}}</h3>
                            <a href="{{route('gallery3')}}" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/secretary/44.jpg')}}"  alt="">
                            </a>
                        </div>
                        @else
                        <div class="col-lg-3 col-md-4 col-6">
                            <h3 class=" ">{{$album->name}}</h3>
                            <a href="{{route('gallery3')}}" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="{{asset('images/gallery/secretary/44.jpg')}}"  alt="">
                            </a>
                        </div>
                        @endif
                        @if($i % 3 == 0)
                        <div></div><div class="row text-center">
                            @else
                        </div>
                        @endif
                        <?php $i++;?>
                    @endforeach
                </div>
            </div>
            @else
            <p>No Album To Display</p>
            @endif
            
            
          

    <form action="{{route('gallerystore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="Album Name">
        </div>
        <div class="class="form-group>
            <label for="">Description</label>
            <textarea type="text" name="description" class="form-control" placeholder="Album Description" ></textarea>
        </div>
        <div class="class="form-group>
            <label for="">Fild</label>
            <input type="file" name="cover_image" class="form-control"  >
            <small class="badge"><strong>Maximun 1M</strong></small>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
   </form>
        
        </div>



    @stop
