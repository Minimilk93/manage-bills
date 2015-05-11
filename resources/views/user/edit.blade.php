@extends('master')

@section('content')
    {!! HTML::image('houses.jpg', 'alt-text',  array('class' => 'profileimg')) !!}
    <h3 class = "profile-head">Your Bills</h3>

    <div class='container'>
        <div class = "row">
            <div class = "col-md-5">
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

            <div class = "col-md-7">

                <div class ="bio">



                    <h1>Edit Your Profile</h1>
                    @if ($user->house == true)
                        <p>You don't need to do anything here, why not add a bill?</p>
                    @endif
                    @if ($user->house == null )
                    <p>This is where you can add your house!</p>
                        @endif

                </div>

                @if ($user->house == null )
        {!! Form::model($user->house, ['route' => 'profile.store']) !!}

        <div class ="form-group">
            {!! Form::label('first_line_address', 'First line of address:') !!}
            {!! Form::text('first_line_address', null, ['class' => 'form-control'])!!}
        </div>

        <div class ="form-group">
            {!! Form::label('city', 'Town/City:') !!}
            {!! Form::text('city', null, ['class' => 'form-control'])!!}
        </div>

        <div class ="form-group">
            {!! Form::label('postcode', 'Postcode:') !!}
            {!! Form::text('postcode', null, ['class' => 'form-control'])!!}
        </div>

        <div class ="form-group">
            {!! Form::submit('Update Profile', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
                    @endif
    </div>

        </div>
    </div>



@stop
