<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landingpage</title>
    <link rel="stylesheet" href="Landingpage.css">
</head>
<body>
   <header>
    <nav>
        <div class="logo">
            <img src="{{asset('images\24650 [Converted].png')}}" alt="" srcset="">
        </div>

        <ul class="nav-links">
            <li><a href="{{url('Login')}}">SIGN IN</a></li>
            <li><a href="{{url('Register')}}">SIGN UP</a></li>
        </ul>
    </nav>
   </header>
    <main class="contents">
        <div class="row">
            <div class="content-wrapper">
                <h1>Apakah Anda Melihat Sampah Yang berserakan?</h1>
                <p>Jika Rumah anda berserakan dengan sampah dan anda malas membersihkannya? Clean De Kost Solusinya</p>
                <a href="{{url('Register')}}" class="btn">Daftar Sekarang</a>
            </div>
        </div>
    </main>
</body>
</html>