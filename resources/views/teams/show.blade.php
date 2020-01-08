@extends('layouts.default')

@section('content')
    <div class="container portfolio">
        <div class="row">
            <div class="col-md-12">
                <div class="heading ">
                    <img src="https://image.ibb.co/cbCMvA/logo.png" />
                </div>
            </div>
        </div>
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
                        <h5>Bio : {{$showTeam->description}}</h5>
                        <p>{{$showTeam->emailAddress}}</p>
                        <p>{{$showTeam->emailAddress}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
