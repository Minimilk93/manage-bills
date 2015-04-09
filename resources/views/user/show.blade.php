@extends('master')

@section('content')

    <div class='container'>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <h3>My Profile</h3>
                <p>{{ $user->name }}</p>
                <li><a href='#'>My Providers</a></li>
                <li><a href='#'>My Bills</a></li>
                @if (Auth::user()->id == $user->id)
                <li><a href='/{profile}/edit'>Edit Profile</a></li>
                @endif
            </ul>
        </div>

        <h2>My House</h2>

        <div class ="bio">

            {{ $user->house->first_line_address }}

            <p><img src ="https://upload.wikimedia.org/wikipedia/commons/2/24/House.svg"></p>
        </div>

    </div>
@stop