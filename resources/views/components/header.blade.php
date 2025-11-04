<header id="header">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    @endpush

    <h1 id="title-header">Quase tudo gostoso</h1>

    <div class="container-buttons-header">
        @guest
            <a id="button-header" href="/login">Login</a>
            <a id="button-header" href="/registrar">Inscrever-se</a>
        @endguest

        @auth
            <form action="/logout" method="POST" style="padding: 0">
                @csrf
                <button id="button-header" type="submit">Sair</button>
            </form>
        @endauth
    </div>
</header>
