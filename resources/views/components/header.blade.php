<header id="header">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    @endpush

    <h1 id="title-header">Quase tudo gostoso</h1>

    <div class="container-buttons-header">
        @guest
            <div style="display: flex; justify-content: flex-end; width: 100%;">
                <a class="button-header" href="/login">Login</a>
                <a class="button-header" href="/registrar">Inscrever-se</a>
            </div>
        @endguest

        @auth
            <div id="nav-bar">
                <a class="button-header" href="/categoria">Categoria</a>
                <a class="button-header" href="/refeicao">Refeição</a>
                <a class="button-header" href="/receita">Receita</a>
            </div>

            <form action="/logout" method="POST" style="padding: 0">
                @csrf
                <button class="button-header" id="button-logout" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                        width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-log-out-icon lucide-log-out">
                        <path d="m16 17 5-5-5-5" />
                        <path d="M21 12H9" />
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    </svg>Sair</button>
            </form>
        @endauth
    </div>
</header>
