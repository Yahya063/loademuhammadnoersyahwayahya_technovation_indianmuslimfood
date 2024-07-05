<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Habesha Cuisine</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">
    <link rel="icon" href="/images/image.png">

</head>

<body>

    @yield('content')

    <footer>
        <p>Copyright 2024 Habesha Cuisine</p>
    </footer>
</body>

</html>
