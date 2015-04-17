@extends('master')

@section('content')

    <div class = "jumbotron">
            <h1 class = "jumbotron header">Welcome to House Helper</h1>

            <p class = "jumbotron body">A hub to serve your housing needs.</p>
    </div>

    <div class="container">

    <div class = "row">
        <div class = "col-md-4">
            {!! HTML::image('Home.png', 'alt-text',  array( 'width' => 250, 'height' => 200, 'class' => 'homeimg')) !!}
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum</p>
        </div>

        <div class = "col-md-4">
            {!! HTML::image('group.jpg', 'alt-text', array( 'width' => 250, 'height' => 200, 'text-align' => 'right' )) !!}
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum</p>
        </div>

        <div class = "col-md-4">
            {!! HTML::image('question.png', 'alt-text', array( 'width' => 250, 'height' => 200, 'text-align' => 'right' )) !!}
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum</p>
        </div>

    </div>

    </div>
@stop