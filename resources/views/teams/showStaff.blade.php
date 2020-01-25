@extends('layouts.default')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container portfolio">

        <div class="bio-info">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bio-image ">
                                <img src="{{asset('storage') . '/' . $showStaff->image}}" alt="image" class="rounded-circle"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-content">
                        <h1>{{$showStaff->name}}</h1>
                        <h5><strong>{{__('messages.bio')}}</strong> : {{$showStaff->description}}</h5>
                        <p><strong>Quality</strong> : {{$showStaff->quality}}</p>
                        <p><strong>Email</strong> : {{$showStaff->emailAddress}}</p>
                        <p><strong>Facebook</strong> : {{$showStaff->facebook}}</p>
                        <p><strong>Linkedin</strong> : {{$showStaff->linkedin}}</p>
                        <p><strong>Google</strong> : {{$showStaff->googleplus}}</p>
                        <p><strong>Twiter</strong> : {{$showStaff->twiter}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
