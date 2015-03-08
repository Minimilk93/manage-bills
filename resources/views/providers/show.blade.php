@extends('master')

@section('content')

    <h2>{{ $provider->name }}</h2>

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

    @foreach ($reviews as $review)

        <table class="table table-bordered">

             <tr>
                <td><b>Utility Used:</b>{{$review->utility}}</td>
                <td><b>Location:</b>{{$review->location}}</td>

            </tr>
            <tr >
                <td style="height:100px" colspan="2">{{$review->review}}</td>
            </tr>
        </table>

    @endforeach

@stop