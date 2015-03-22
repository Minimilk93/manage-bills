<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>

    <link rel = "stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body style="padding:70px">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                 <li><a href="/">Home</a></li>
                 <li><a href="/providers">Have Your Say</a></li>
                 <li><a href="/reviews">Provider Reviews</a></li>
                 <li></li>
                </ul>
            <ul class="nav navbar-nav navbar-right">
                 <li><a href="/auth/register">Sign Up</a></li>
                 <li><a href="/auth/login">Sign In</a></li>
            </ul>
        </div>
        </div>
    </nav>


    <div class ="container">
    <h1>Manging Bills Web Application</h1>
        </div>

<div class ="container">
    @yield('content')

</div>

</body>

</html>