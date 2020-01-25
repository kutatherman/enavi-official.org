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
                                <img src="{{asset('storage') . '/' . $showTeam->image}}" alt="image" class="rounded-circle"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bio-content">
                        <h1>{{$showTeam->name}}</h1>
                        <h5><strong>{{__('messages.bio')}}</strong> : {{$showTeam->description}}</h5>
                        <p><strong>Quality </strong>: {{$showTeam->quality}}</p>
                        <p><strong>Email</strong> : {{$showTeam->emailAddress}}</p>
                        <p><strong>Facebook</strong> : {{$showTeam->facebook}}</p>
                        <p><strong>Linkedin</strong> : {{$showTeam->linkedin}}</p>
                        <p><strong>Google</strong> : {{$showTeam->googleplus}}</p>
                        <p><strong>Twiter</strong> : {{$showTeam->twiter}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
