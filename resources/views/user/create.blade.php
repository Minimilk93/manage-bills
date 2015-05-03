@extends('master')

@section('content')

    <h1>test</h1>
    <h1>test</h1>
    <h1>test</h1>
    <h1>test</h1>
    <h1>test</h1>


    <div class = "container">
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
        {!! Form::submit('Create House', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    </div>
@stop
