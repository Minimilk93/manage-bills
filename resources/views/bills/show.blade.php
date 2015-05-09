@extends('master')

@section('content')
    {!! HTML::image('houses.jpg', 'alt-text',  array('class' => 'profileimg')) !!}
    <h3 class = "profile-head">Your Bills</h3>

    <div class='container'>

    <div class = "row">
        <div class = "col-md-6">
            <div id = "profile-icon">
                {!! HTML::image('house-icon.png', 'alt-text',  array( 'width' => 200, 'height' => 100, 'class' => 'homeimg')) !!}
            </div>
            <div class = "profile-name">
                <h2>Hello {{ $user->name }}!</h2>
                <h5>{{ $user->email }}</h5>
            </div>
            <div class ="dashboard-profile">

                <ul class="profile_nav ">
                    <li class="profile_head">House Options</li>
                    <li><a href='/profile/{{ $user->name }}'>My Profile</a></li>
                    <li><a href='/profile/{{ $user->name }}/bills'>My Bills</a></li>
                    <li><a href='/profile/{{ $user->name }}/add-bills'>Add a Bill</a></li>
                    @if (Auth::user()->id == $user->id)
                        <li><a href="/profile/{{ $user->name }}/edit">Edit Profile</a></li>
                    @endif
                </ul>
            </div>
        </div>


        <div class = "col-md-6">

        </div>
    </div>





    </div>



@stop