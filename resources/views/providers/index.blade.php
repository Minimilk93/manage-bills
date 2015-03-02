@extends('master')

@section('content')

    <h1>Providers</h1>

    @foreach ($providers as $provider)

    <li><a href="/providers/{{ $provider->id }}">{{ $provider->name }}</a></li>

    @endforeach

@stop