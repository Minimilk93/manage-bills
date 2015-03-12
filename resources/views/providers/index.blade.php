@extends('master')

@section('content')

    <h1>Providers</h1>

    @foreach ($providers as $provider)

    <li><a href="/providers/{{ $provider->slug }}">{{ $provider->name }}</a></li>

    @endforeach

@stop