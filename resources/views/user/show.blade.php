@extends('master')

@section('content')
    {!! HTML::image('windfarm.jpg', 'alt-text',  array('width' => '100%', 'height' => 600, 'class' => 'homeimg')) !!}
        <h2 class = "header-img">Profile</h2>
            <a class = "link-img" href ="#profileview">Your Information</a>
            <p class = "quote-img">The future is green energy, sustainability, renewable energy. - <i>Arnold Schwarzenegger</i></p>


    <div class='container'>
        <section id ="profileview">
            <h1>{{ $user->name }}</h1>
            <h3>{{ $user->email }}</h3>

            <div class = "row">
                <div class = "col-md-6">
                    @if ($user->house_id == null )
                    <h1> You have not completed your profile. Please add a house to your account. </h1>
                    @endif
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id vestibulum dolor, id interdum ipsum.
                        Integer nunc quam, mollis vitae commodo non, semper et nibh. Vestibulum sit amet sem tempus, vulputate turpis ac,
                        pretium nisl. Sed ornare enim eget tincidunt auctor. Aliquam et quam vitae ex vehicula commodo id non turpis.
                        Proin dictum, sem sodales bibendum dapibus, nisi urna malesuada odio, eu mollis nisl erat a turpis.</p>

                        <p>Nulla ut ligula tincidunt lorem suscipit congue eget quis elit. Cras tristique nisl in volutpat commodo.
                        Nunc non nisl sed metus interdum interdum. Aliquam erat volutpat. Ut hendrerit, erat vel malesuada dictum,
                        lacus tellus euismod dolor, in mollis velit nisl nec lectus.
                        Fusce vestibulum libero augue, non ultricies diam scelerisque quis.</p>
                </div>

                <div class = "col-md-6">
                    {!! HTML::image('Home.png', 'alt-text',  array( 'width' => 450, 'height' => 400, 'class' => 'homeimg')) !!}
                </div>
            </div>
            <!--    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

           <ul class="nav navbar-nav">
                <h3>My Profile</h3>
                <p>{{ $user->name }}</p>
                <li><a href='#'>My Providers</a></li>
                <li><a href='#'>My Bills</a></li>
                @if (Auth::user()->id == $user->id)
                <li><a href="/profile/{{ $user->name }}/edit">Edit Profile</a></li>
                @endif
            </ul>-->
        </div>

        </section>

        <div class ="bio">

            @if ($user->house)

            {{ $user->house->first_line_address }}

            @endif

        </div>

    </div>
@stop