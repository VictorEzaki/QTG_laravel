<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">
    </x-slot:styles>

    <main>
        <article>
            <h1 id="title-main" align="center" style="font-size: 20px;">Bem-vindo ao <b style="color: #FF922B;">Quase
                    Tudo Gostoso!</b></h1>
            <p id="description-main">
                Encontre receitas incríveis para qualquer momento. Desde pratos rápidos e simples para o dia a dia à
                receitas mais elaboradas para ocasiões especiais, nosso site reúne opções variadas para agradar a
                todos os gostos.
                Explore, descubra novas ideias e compartilhe suas próprias criações conosco.
                Vamos cozinhar juntos e transformar cada refeição em uma experiência inesquecível!
            </p>
        </article>

        @foreach ($ultimasReceitas as $ultimaReceita)
            <article>
                <h2 id="title-main" style="text-align:center; font-size:16px;">
                    <b style="color: #FF922B;">{{ $ultimaReceita->titulo }}</b>
                </h2>

                <p>
                    {{ $ultimaReceita->descricao }}
                </p>

                <div class="linha-info">
                    <div style="text-align: left;"><b>Categorias</b></div>
                    <div style="text-align: center;"><b>Dificuldade</b></div>
                    <div style="text-align: right;"><b>Tempo de preparo</b></div>
                </div>
                <div class="linha-info valores">

                    <div style="text-align: left;">
                        @foreach ($ultimaReceita->categorias as $categoria)
                            {{ $categoria->categoria }}{{ !$loop->last ? ',' : '' }}
                        @endforeach
                    </div>
                    <div style="text-align: center;">{{ $ultimaReceita->dificuldade->dificuldade }}</div>
                    <div style="text-align: right;">{{ $ultimaReceita->preparo->tempo_preparo }}</div>
                </div>

                <br>

                <img id="{{ asset('storage/' . $ultimaReceita->imagem) }}" src="" width="300" height="200" class="imagem-centro"
                    alt="Imagem da receita">

                <a href="/receita/show/{{ $ultimaReceita->id }}" class="botao">
                    Conferir
                </a>
            </article>
        @endforeach

    </main>
</x-layout>
