@extends('master')

@section('content')

    <div class = "container">

    <h2 class = "form-title">{{ $provider->name }} Information and Add Reviews</h2>

        <p>Welcome to the provider page of {{ $provider->name }}! Here is where information appears about the provider.
        You can also add reviews for any provider here.</p>

        <h3>Description</h3>
        <p>
        {{$provider->description}}
            </p>

        <h3>Add Review</h3>
    {!! Form::open(['route' => 'reviews.store']) !!}

    <div class ="form-group">
        {!! Form::label('utility', 'Utility used (e.g BT Internet):') !!}
        {!! Form::text('utility', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::label('location', 'Location:') !!}
        {!! Form::text('location', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::label('review', 'Your Review (reminder that reviews are anonymous):') !!}
        {!! Form::textarea('review', null, ['class' => 'form-control'])!!}
    </div>

    <div class ="form-group">
        {!! Form::submit('Add Review', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    </div>
@stop