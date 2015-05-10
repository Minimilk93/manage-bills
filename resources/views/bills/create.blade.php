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

                <div class ="bio">



                        <h1>Add a Bill</h1>

                </div>
                {!! Form::open(['route' => 'bill.store']) !!}

                <div class ="form-group">
                    {!! Form::label('bill_name', 'Bill Name:') !!}
                    {!! Form::text('bill_name', null, ['required', 'class' => 'form-control'])!!}
                </div>

                <div class ="form-group">
                    {!! Form::label('bill_date', 'Date of Bill:') !!}
                    {!! Form::text('bill_date', null, ['required', 'class' => 'form-control'])!!}
                </div>

                <div class ="form-group">
                    {!! Form::label('bill_amount', 'Bill Amount:') !!}
                    {!! Form::text('bill_amount', null, ['required', 'class' => 'form-control'])!!}
                </div>

                <div class ="form-group">
                    {!! Form::label('bill_comments', 'Bill Comments:') !!}
                    {!! Form::textarea('bill_comments', null, ['class' => 'form-control'])!!}
                </div>

                <div class ="form-group">
                    {!! Form::label('bill_divide', 'Amount of people to be shared by:') !!}
                    {!! Form::text('bill_divide', null, ['required', 'class' => 'form-control'])!!}
                    <a onclick="DivideFunction()">Divide It!</a>
                </div>

                <div class ="form-group">
                    {!! Form::label('bill_shared', 'Amount owed by each person who used utility:') !!}
                    {!! Form::text('bill_shared', null, ['required', 'class' => 'form-control'])!!}
                </div>

                <div class ="form-group">
                    {!! Form::submit('Create Bill', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}

            </div>
            </div>
        </div>





    </div>



@stop