<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/show-receita.css') }}">
    </x-slot:styles>

    <div class="receita-page">

        <h1 class="receita-titulo">{{ $receita->titulo }}</h1>

        <img class="receita-img" src="{{ asset('storage/' . $receita->imagem) }}" alt="Imagem da receita">

        <div class="receita-info">
            <strong>Autor:</strong> {{ $receita->usuario->nome }}
        </div>

        <div class="receita-info">
            <strong>Descrição:</strong> {{ $receita->descricao }}
        </div>

        <div class="receita-info">
            <strong>Preparo:</strong> {{ $receita->preparo->modo_preparo }} — {{ $receita->preparo->tempo_preparo }}
        </div>

        <div class="receita-bloco">
            <strong>Ingredientes necessários:</strong>
            <ul>
                @foreach ($receita->ingredientes as $ingrediente)
                    <li>{{ $ingrediente->ingrediente }}</li>
                @endforeach
            </ul>
        </div>

        <div class="receita-bloco">
            <strong>Utensílios necessários:</strong>
            <ul>
                @foreach ($receita->utensilios as $utensilio)
                    <li>{{ $utensilio->utensilio }}</li>
                @endforeach
            </ul>
        </div>

        <div class="receita-bloco">
            <strong>Cozinha(s) de origem(s):</strong>
            <ul>
                @foreach ($receita->cozinhas as $cozinha)
                    <li>{{ $cozinha->cozinha }}</li>
                @endforeach
            </ul>
        </div>

        <div class="receita-info">
            <strong>Custo:</strong> {{ $receita->custo->custo }}
        </div>

    </div>

</x-layout>
