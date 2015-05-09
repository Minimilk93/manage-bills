@extends('master')

@section('content')
    {!! HTML::image('houses.jpg', 'alt-text',  array('class' => 'profileimg')) !!}
    <h3 class = "profile-head">Your Profile</h3>

    <div class='container'>



        <div class = "row">
            <div class = "col-md-6">
        <div id = "profile-icon">
            {!! HTML::image('house-icon.png', 'alt-text',  array( 'width' => 200, 'height' => 100, 'class' => 'homeimg')) !!}
        </div>
        <div class = "profile-name">
            <h2>Hello {{ $user->name }}!</h2>
            <h5>{{ $user->email }}</h5>
        </div>
                <div class ="dashboard-profile">

                    <ul class="profile_nav ">
                        <li class="profile_head">House Options</li>
                        <li><a href='/profile/{{ $user->name }}'>My Profile</a></li>
                        <li><a href='/profile/{{ $user->name }}/bills'>My Bills</a></li>
                        <li><a href='/profile/{{ $user->name }}/add-bills'>Add a Bill</a></li>
                        @if (Auth::user()->id == $user->id)
                            <li><a href="/profile/{{ $user->name }}/edit">Edit Profile</a></li>
                        @endif
                    </ul>
                </div>
        </div>


                <div class = "col-md-6">
                    @if ($user->house == null )
                    <h1 class ="house-alert"> You have not completed your profile. Please add a house to your account. </h1>
                    @endif

                        <div class ="bio">

                            @if ($user->house == true)

                                <h1>{{ $user->house->first_line_address }}, {{ $user->house->city }}</h1>

                            @endif

                        </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id vestibulum dolor, id interdum ipsum.
                        Integer nunc quam, mollis vitae commodo non, semper et nibh. Vestibulum sit amet sem tempus, vulputate turpis ac,
                        pretium nisl. Sed ornare enim eget tincidunt auctor. Aliquam et quam vitae ex vehicula commodo id non turpis.
                        Proin dictum, sem sodales bibendum dapibus, nisi urna malesuada odio, eu mollis nisl erat a turpis.</p>

                        <p>Nulla ut ligula tincidunt lorem suscipit congue eget quis elit. Cras tristique nisl in volutpat commodo.
                        Nunc non nisl sed metus interdum interdum. Aliquam erat volutpat. Ut hendrerit, erat vel malesuada dictum,
                        lacus tellus euismod dolor, in mollis velit nisl nec lectus.
                        Fusce vestibulum libero augue, non ultricies diam scelerisque quis.</p>
                </div>
        </div>





    </div>
@stop