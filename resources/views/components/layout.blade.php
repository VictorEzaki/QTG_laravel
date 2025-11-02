<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quase tudo gostoso</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    @stack('styles')

</head>

<body class="h-full">
    @auth
        <form method="POST" action="/logout">
            @csrf
            <button id="button" type="submit">Sair</button>
        </form>
    @endauth
    {{ $slot }}
</body>

</html>
