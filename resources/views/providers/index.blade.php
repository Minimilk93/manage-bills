@extends('master')

@section('content')
    <div class = "jumbotron">
        <h1 class = "jumbotron header">Providers</h1>

        <p class = "jumbotron body">Find out information about providers and leave feedback on your own experience.</p>
    </div>
    <div class = "container">
        <h1>Providers</h1>



        <div class = "row">
            <div class = "col-md-6">
                @foreach ($providers as $provider)

                    <li><a href="/providers/{{ $provider->slug }}">{{ $provider->name }}</a></li>

                @endforeach
            </div>
        </div>


    </div>
@stop