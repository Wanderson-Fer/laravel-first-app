<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page - @yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('welcome') }}">Welcome</a></li>
            <li><a href="{{ route('jogos.index') }}">Jogos</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>