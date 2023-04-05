<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('image/Logo.png') }}">
            </div>

            <ul class="nav-links">
                <li><a href="{{url('Login')}}">SIGN IN</a></li>
                <li><a href="{{url('Register')}}">SIGN UP</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>