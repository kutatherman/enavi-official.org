@extends('layouts.app', ['title' => 'Message'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
            <p class="alert-info badge">Vous avez {{  $posts->count()}} messages</p>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-3  ">
                <a href="#" class="btn btn-danger">Delete all messages</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($posts) > 0)
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->name}}</td>
                                <td><a href="mailto:{{$post->email}}">{{$post->email}}</a></td>
                                <td>{{$post->phone}}</td>
                                <td>{{$post->msg}}</td>
                                <td>{{$post->created_at->format('d-m-Y')}}</td>
                                <td><a href="" class="btn btn-info">Delete</a></td>
                            </tr>
                        @endforeach
                    @else
                        <p class="alert-info text-center" >{{__('messages.msgDashboard')}}</p>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
