<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    </head>
    <body>
    <header>
        <div class="logo">
            <h1>
                <a href="/">Энерготехника</a>
            </h1>
        </div>
        <div class="search-box">
            <form action="/">
                <input type="search" placeholder="Поиск..." style="width: 400px">
            </form>
        </div>
        <ul class="menu">
            <li><a href="">Категории</a></li>
            <li><a href="">Доставка</a></li>
            <li><a href="">О нас</a></li>
            <li><a href="">Зарегистрироваться</a></li>
        </ul>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
