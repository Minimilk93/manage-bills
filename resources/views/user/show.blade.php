@extends('master')

@section('content')

    <div class='container'>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <h3>{{ isset(Auth::user()->name) ? Auth::user()->name :  '' }}</h3>
                <p>{{ $user->name }}</p>
                <li><a href='#'>My House Mates</a></li>
                <li><a href='#'>My Providers</a></li>
                <li><a href='#'>My Bills</a></li>
            </ul>
        </div>

        <h2>My House</h2>

    </div>
@stop