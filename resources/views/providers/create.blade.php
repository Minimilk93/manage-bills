@extends('master')

@section('content')

    <h2>Add a new Provider</h2>

    {!! Form::open(['route' => 'providers.store']) !!}

    <div class ="form-group">
        {!! Form::text('name', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::textarea('description', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::text('slug', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::submit('Add Provider', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}
@stop