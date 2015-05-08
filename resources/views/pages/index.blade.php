@extends('master')

@section('content')

<div id = "home-cont">


 {!! HTML::image('windfarm5.jpg', 'alt-text',  array('class' => 'homeimg')) !!}


    <h2 class = "header-img">Utilities made easy.</h2>
    <a class = "get-started" href = "/auth/register">Get Started</a>
    <a  href = "/auth/login" class = "home-login">Login</a>
</div>


@stop