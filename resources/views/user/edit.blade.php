@extends('master')

@section('content')
    <div class='container'>
    <h3>Edit Your Profile</h3>

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
    </div>



@stop
