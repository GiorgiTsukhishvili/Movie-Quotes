<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movie Quotes</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')


</head>

<body class="bg-gradient-radial from-neutral-650 via-neutral-700 to-neutral-700 min-h-[100vh] h-">

    {{ $content }}

</body>

</html>
