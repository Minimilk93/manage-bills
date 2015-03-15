@extends('master')

@section('content')

    <h2>{{ $provider->name }} Information</h2>

    {!! Form::open(['route' => 'reviews.store']) !!}

    <div class ="form-group">
        {!! Form::label('utility', 'Utility used (e.g BT Internet):') !!}
        {!! Form::text('utility', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::text('location', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::textarea('review', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::submit('Add Review', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@stop