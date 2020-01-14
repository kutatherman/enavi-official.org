@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 card">
                <h3>Edit Member <strang>{{$team->name}}</strang></h3>
                <form action="{{route('postUpdate', $team->id)}}" method="POST" role="form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="">Name <span class="text-danger" >*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$team->name}}">

                        @error('name')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Quality<span class="text-danger" >*</span></label>
                        <input type="text" class="form-control @error('quality') is-invalid @enderror" name="quality" value="{{$team->quality}}">

                        @error('quality')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="facebook">FaceBook Account</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{$team->facebook}}">

                        @error('facebook')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkedin">LinkedIn Account</label>
                        <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{$team->linkedin}}">

                        @error('linkedin')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="googleplus">Google+ Account</label>
                        <input type="text" class="form-control @error('googleplus') is-invalid @enderror" name="googleplus" value="{{$team->googleplus}}">

                        @error('googleplus')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="twiter">Twiter Account</label>
                        <input type="text" class="form-control @error('twiter') is-invalid @enderror" name="twiter" value="{{$team->twiter}}">

                        @error('twiter')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email address </label>
                        <input type="text" class="form-control @error('emailAddress') is-invalid @enderror" name="emailAddress" value="{{$team->emailAddress}}">

                        @error('emailAddress')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-file ">
                            <input type="file" name="image" class="custom-file-input @error('image') @enderror"  id="customFile">
                            <label class="custom-file-label " for="customFile">Choose picture <span class="text-danger" >*</span></label>
                            @error('image')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description </label>
                        <textarea  name="description" id="description" class=" form-control @error('description') is-invalid @enderror "  rows="7" cols="50">{{$team->description}}</textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="text-center "><button type="submit" class="btn btn-primary btn-block">Edit Member</button></div>
                </form>
            </div>
        </div>


    </div>

@stop
