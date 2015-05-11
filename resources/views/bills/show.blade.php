@extends('master')

@section('content')
    {!! HTML::image('houses.jpg', 'alt-text',  array('class' => 'profileimg')) !!}
    <h3 class = "profile-head">Your Bills</h3>

    <div class='container'>

    <div class = "row">
        <div class = "col-md-5">
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


        <div class = "col-md-7">

            <div class ="bio">



                <h1>Your Bills</h1>

                <p>This is where you can view your bills. Go ahead! Create a bill from using the left hand menu!</p>

            </div>




            @foreach($bills as $bill)

                <table class="table">
                    <tr class="bills-row">
                        <th class="bills-med">Bill Name</th>
                        <th class="bills-med">Bill Date</th>
                        <th class="bills-small">Bill Amount</th>
                        <th class="bills-large">Bill Comments</th>
                        <th class="bills-small">Bill Divided By</th>
                        <th class="bills-small">Bill Share Amount</th>
                    </tr>
                    <tr class="bills-row">
                        <td class="bills-med">{{$bill->bill_name}}</td>
                        <td class="bills-med">{{$bill->bill_date}}</td>
                        <td class="bills-small">{{$bill->bill_amount}}</td>
                        <td class="bills-large">{{$bill->bill_comments}}</td>
                        <td class="bills-small">{{$bill->bill_divide}}</td>
                        <td class="bills-small">{{$bill->bill_shared }}</td>

                    </tr>
                </table>
            @endforeach
        </div>
    </div>





    </div>



@stop