@extends('layouts.app', ['title' => 'Message'])

@section('content')
    <section id="tabs" class="project-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <p class=" alert-info badge" >Vous avez {{  $posts->count()}} messages au total</p>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Messages Réçu</a>
                            <a class="btn btn-danger " href="{{route('msgDeleteAll', $posts->all())}}" data-method="DELETE" data-confirm="Are you sure ?">DELETE ALL</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" class="icon-select_all"></th>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($posts) > 0)
                                    @foreach($posts as $post)
                                        <tr>
                                            <td><input type="checkbox" name="ids" class="custom-select"></td>
                                            <td>{{$post->name}}</td>
                                            <td>{{$post->msg}}</td>
                                            <td>{{$post->phone}}</td>
                                            <td>{{$post->email}}</td>
                                            <td>{{$post->created_at->format('d-m-Y')}}</td>
                                            <td><a href="{{route('msgDelete', $post->id )}}" data-method="DELETE" data-confirm="Are you sure ?" class="badge btn-info">Delete</a></td>
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
            </div>
        </div>
    </section>
@stop
