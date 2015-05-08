@extends('master')

@section('content')
<div style = "background-image: url('solar.jpg')" id = "review-container">



    <div id="review-wrapper">
    <div id = "review-holder">
        <h1 class = "review-head">Reviews by you</h1>
    {!! Form::open(['method' => 'GET']) !!}
    <div class="form-group" >
        <label class="searchlabel">
        <input class="search" style = "background-image: url('System-search.jpg')" placeholder="Search by provider or location..." name="q" type="search">
        </label>
            <button type="submit" class="search-button">
            Search
        </button>
    </div>




    {!! Form::close() !!}


    @foreach($reviews as $review)
        <table class="table-review">

            <tr class="info">
                <th style="width:50%"><b>Utility Used: </b>{{$review->utility}}</th>
                <th style="width:50%"><b>Location: </b>{{$review->location}}</th>

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