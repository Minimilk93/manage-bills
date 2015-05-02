@extends('master')

@section('content')
<div style = "background-image: url('power.jpg')" id = "review-container">

    <h2>Provider Reviews</h2>

    <div id="review-wrapper">
    <div id = "review-holder">
    {!! Form::open(['method' => 'GET']) !!}
    <div class="form-group">

        {!! Form::input('search', 'q', null, ['placeholder' => 'Search provider...']) !!}

    </div>
    {!! Form::close() !!}


    @foreach($reviews as $review)
        <table class="table table-bordered">

            <tr class="info">
                <td style="width:50%"><b>Utility Used:</b>{{$review->utility}}</td>
                <td style="width:50%"><b>Location:</b>{{$review->location}}</td>

            </tr>
            <tr >
                <td style="height:100px" colspan="2">{{$review->review}}</td>
            </tr>
        </table>
    @endforeach
    </div>
    </div>

</div>







@stop