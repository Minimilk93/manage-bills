@extends('master')

@section('content')
    <div class = "container">

        <div class = "bio">

    <h1 class = "form-title">Add a new Provider</h1>

        </div>
    {!! Form::open(['route' => 'providers.store']) !!}

    <div class ="form-group">
        {!! Form::label('name', 'Provider Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::label('description', 'Provider Description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::label('slug', 'Provider slug (provider name):') !!}
        {!! Form::text('slug', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::submit('Add Provider', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}
        </div>
@stop