<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quase tudo gostoso</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    @stack('styles')

    {{ $styles ?? '' }}

</head>

<body class="h-full">

    <x-header />

    {{ $slot }}

    @if (session('success'))
        <div id="alert-success"
            style="
             position: fixed;
             top: 100px;
             right: 20px;
             padding: 15px;
             background: #4CAF50;
             color: white;
             border-radius: 5px;
             z-index: 9999;
         ">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                document.getElementById('alert-success').style.display = 'none';
            }, 2500);
        </script>
    @endif

    <x-footer />

</body>

</html>
