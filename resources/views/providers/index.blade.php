@extends('master')

@section('content')

        {!! HTML::image('person.jpg', 'alt-text',  array('class' => 'providers-img')) !!}

        <div class = "IE-Overlay"></div>

        <h1 class = "header-overlay">Make the right choice</h1>

        <a class = "have-button" href = "/reviews">See all reviews</a>

        <a class = "provider-have-button" href = "#provider-list">See provider list</a>

                    <p class = "p-overlay">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed dictum velit magna, nec euismod mauris tincidunt vulputate.
                    Pellentesque et iaculis turpis. Nulla maximus ipsum at orci fermentum ultricies.
                    Pellentesque eu dignissim turpis, eu imperdiet mi. Sed in felis nec ligula sollicitudin rhoncus.
                    Integer imperdiet sodales quam in laoreet. In placerat, est eu malesuada dapibus, nunc lacus accumsan mi,
                    dapibus imperdiet ipsum tellus sit amet neque.Sed in felis nec ligula sollicitudin rhoncus.
                    Integer imperdiet sodales quam in laoreet. In placerat, est eu malesuada dapibus, nunc lacus accumsan mi,
                        dapibus imperdiet ipsum tellus sit amet neque. </p>

    <div id = "provider-list">



            <div class = "col-md-6">
                <h1>Find your provider.</h1>

                <a class = "provider-link" href = "/providers/create">Add a Provider</a>
                    <div class="list-group">

                        @foreach ($providers as $provider)

                            <li><a class="list-group-item" href="/providers/{{ $provider->slug }}">{{ $provider->name }}</a></li>

                        @endforeach
                    </div>
            </div>

        <div class = "row">
            <div class = "col-md-6">

                {!! HTML::image('confused.jpg', 'alt-text',  array('class' => 'have-your-sayimg')) !!}

            </div>
        </div>
        </div>

@stop