<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @section('header')
    <div class="header">
        <div class="icon">
<h1><span class="icon-d">Ayush</span>Blogs</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About </a></li>
                <li><a href="#">Gallary</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
    </div>
    @show
    <div class="homescreen">
        <h2>This is Ayush blog</h2>
    </div>
    <div class="container">
        @yield('container')
    </div>
    <div class="footer">
        @section('footer')
        This is footer
        @show
    </div>
</body>
</html>