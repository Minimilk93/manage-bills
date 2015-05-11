@extends('master')

@section('content')

<div id = "home-cont">


 {!! HTML::image('windfarm5.jpg', 'alt-text',  array('class' => 'homeimg')) !!}


    <h2 class = "header-img">Utilities made easy.</h2>
    @if (Auth::guest())
    <a class = "get-started-button" href = "/auth/register">Sign Up</a>
    <a  href = "/auth/login" class = "home-login">Login</a>
    @else
        <a class = "get-started-button" href = "/auth/logout">Logout</a>
        <a  href = "/" class = "home-login">Hello, {{ isset(Auth::user()->name) ? Auth::user()->name :  '' }}</a>
    @endif
</div>


@stop