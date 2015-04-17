<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>

    <link rel = "stylesheet" href="css\bootstrap.min.css">
</head>

<body>
    <header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <a class="navbar-brand" href="/">House Helper</a>
            <ul class="nav navbar-nav">
                 <li><a href="/">Home</a></li>
                 <li><a href="/providers">Have Your Say</a></li>
                 <li><a href="/reviews">Provider Reviews</a></li>
                 <li><a href="/advice">Advice</a></li>
                </ul>
            <ul class="nav navbar-nav navbar-right">
                 @if (Auth::guest())
                 <li><a href="/auth/register">Sign Up</a></li>
                 <li><a href="/auth/login">Sign In</a></li>
                 @else
                 <li>{!! link_to('/profile/'.Auth::user()->name, 'Your Profile') !!}</li>
                 <li><a href="/auth/logout">Log Out</a></li>
                 @endif
                 @if (Auth::guest())
                 <p>Hello, why not sign up?</p>
                 @else
                 <li>Hello, {{ isset(Auth::user()->name) ? Auth::user()->name :  '' }}</li>
                 @endif
            </ul>

        </div>
        </div>
    </nav>
    </header>
</div>

    @yield('content')


</body>

</html>