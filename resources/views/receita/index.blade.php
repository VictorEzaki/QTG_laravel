<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/receita-card.css') }}">
    </x-slot:styles>

    <div class="container-main">

        <div class="head-receitas">
            <form method="GET" action="/receita" class="filtros">

                <div>
                    <label>Categoria</label>
                    <select name="categoria">
                        <option value="">Todas</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}"
                                {{ request('categoria') == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->categoria }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Dificuldade</label>
                    <select name="dificuldade">
                        <option value="">Todas</option>
                        @foreach ($dificuldades as $d)
                            <option value="{{ $d->id }}"
                                {{ request('dificuldade') == $d->id ? 'selected' : '' }}>
                                {{ $d->dificuldade }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Refeições</label>
                    <select name="refeicao">
                        <option value="">Todas</option>
                        @foreach ($refeicoes as $d)
                            <option value="{{ $d->id }}" {{ request('refeicao') == $d->id ? 'selected' : '' }}>
                                {{ $d->refeicao }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Buscar por nome</label>
                    <input type="text" name="buscar" value="{{ request('buscar') }}">
                </div>

                <button id="button" type="submit">Filtrar</button>
            </form>
            <div class="container-button">
                <a href="/receita/create" id="button">Criar uma receita</a>
            </div>
        </div>

        <div class="container-receitas">
            @foreach ($receitas as $receita)
                <a href="/receita/show/{{ $receita->id }}" class="receita-card">
                    <span>
                        <strong>{{ $receita->titulo }}</strong>
                    </span>
                    <img src="{{ asset('storage/' . $receita->imagem) }}" alt="Imagem da receita">
                    <span>
                        <strong>Categorias: </strong>
                        @foreach ($receita->categorias as $categoria)
                            {{ $categoria->categoria }}{{ !$loop->last ? ', ' : '' }}
                        @endforeach
                    </span>
                    <span>
                        <strong>Dificuldade: </strong> {{ $receita->dificuldade->dificuldade }}
                    </span>
                    <span>
                        <strong>Tempo de preparo: </strong> {{ $receita->preparo->tempo_preparo }}
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>
