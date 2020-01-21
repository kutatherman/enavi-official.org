@extends('layouts.default', ['title' => 'Teams'])
@section('content')


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
        <section id="team" class="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="font-weight">OUR TEAM</h2>
                            <span class="dots dt-theme margin-bottom-1"></span>
                        </div>
                        <div class="our-team-three">
                            @if (count($teamPosts) > 0)
                            <div class="team-members row">
                                @foreach($teamPosts as $team)
                                    <div class="col-md-3 ">
                                        <div class="single-member bg-white">
                                            <div class="single-member-header pos-r">
                                                <img src="{{asset('storage') . '/' . $team->image}}" alt="" class="">
                                                <div class="single-member-overlay overlay t-center">
                                                    <div class="overlay bg-orange alpha-50"></div>
                                                    <ul class="social-icons social-icons--circle list-inline is-inline-block pos-tb-center">
                                                        <li class="social-icons__item">
                                                            <a href="{{$team->facebook}}"><i class="fa fa-facebook bg-orange"></i></a>
                                                        </li>
                                                        <li class="social-icons__item">
                                                            <a href="{{$team->twiter}}"><i class="fa fa-twitter bg-orange"></i></a>
                                                        </li>
                                                        <li class="social-icons__item">
                                                            <a href="{{$team->linkedin}}"><i class="fa fa-linkedin bg-orange"></i></a>
                                                        </li>
                                                        <li class="social-icons__item">
                                                            <a href="{{$team->googleplus}}"><i class="fa fa-google-plus bg-orange"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="single-member-content p-15">
                                                <h5 class="font-weight">{{$team->name}}</h5>
                                                <p class="font-weight color-y">{{$team->quality}}</p>
                                                <p><a href="{{route('dashboard.show', ['team' => $team->id]) }}">More infos</a></p>
                                            </div>
                                            @auth()
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span><a href="{{route('postEdit', $team->id)}}" class=" badge btn-primary">Edit Member</a></span>
                                                <span><a href="{{route('postDelete', $team->id )}}" data-method="DELETE" data-confirm="Are you sure ?" class="badge btn-danger">Delete Member</a></span>
                                            </div>
                                                @endauth
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                                @else
                                <p class="text-dark">Aucun membre enrégistrer pour le moment</p>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                @auth()
                <div class="row">
                <table class="table table-hover">
                	<tbody>
                		<tr>
                			<td><a href="{{route('createMember')}}" class="btn btn-success">Add Member</a></td>
                		</tr>
                	</tbody>
                </table>
            </div>
            </div>
            @endauth

        </section>


	</div>	<!-- /container -->

@stop
