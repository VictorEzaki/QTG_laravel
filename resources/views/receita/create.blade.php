<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/receita.css') }}">
    </x-slot:styles>

    <section class="form-container">
        <h1>Adicionar Nova Receita</h1>

        <form action="/receita/store" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="titulo">Título da Receita</label>
                <input type="text" id="titulo" name="titulo" placeholder="Ex: Bolo de Cenoura" required>
                <x-form-error name='titulo'></x-form-error>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" placeholder="Escreva um resumo da receita..." required></textarea>
                <x-form-error name='descricao'></x-form-error>
            </div>

            <div class="form-group">
                <label for="imagem">Imagem da Receita</label>
                <input type="file" id="imagem" name="imagem" accept="image/*">
                <x-form-error name='imagem'></x-form-error>
            </div>

            <div class="form-group">
                <label class="label-categorias">Categorias</label>

                <div class="checkbox-grid">
                    @foreach ($categorias as $categoria)
                        <label class="checkbox-card">
                            <input type="checkbox" name="categorias[]" value="{{ $categoria->id }}">
                            <span>{{ $categoria->categoria }}</span>
                        </label>
                    @endforeach
                </div>

                <x-form-error name="categorias"></x-form-error>
            </div>

            <div class="form-group">
                <label for="modo_preparo">Modo de preparo</label>
                <input type="text" id="modo_preparo" name="modo_preparo">
                <x-form-error name='modo_preparo'></x-form-error>
                <label for="tempo_preparo">Tempo</label>
                <input type="time" id="tempo_preparo" name="tempo_preparo">
                <x-form-error name='tempo_preparo'></x-form-error>
            </div>

            <div class="form-group">
                <label class="label-categorias">Ingredientes</label>

                <div class="checkbox-grid">
                    @foreach ($ingredientes as $ingrediente)
                        <label class="checkbox-card">
                            <input type="checkbox" name="ingredientes[]" value="{{ $ingrediente->id }}">
                            <span>{{ $ingrediente->ingrediente }}</span>
                        </label>
                    @endforeach
                </div>

                <x-form-error name="ingredientes"></x-form-error>
            </div>

            <div class="form-group">
                <label class="label-categorias">Utensílios</label>

                <div class="checkbox-grid">
                    @foreach ($utensilios as $utensilio)
                        <label class="checkbox-card">
                            <input type="checkbox" name="utensilios[]" value="{{ $utensilio->id }}">
                            <span>{{ $utensilio->utensilio }}</span>
                        </label>
                    @endforeach
                </div>

                <x-form-error name="utensilios"></x-form-error>
            </div>

            <div class="form-group">
                <label class="label-categorias">refeicao</label>

                <div class="checkbox-grid">
                    @foreach ($cozinhas as $cozinha)
                        <label class="checkbox-card">
                            <input type="checkbox" name="cozinhas[]" value="{{ $cozinha->id }}">
                            <span>{{ $cozinha->cozinha }}</span>
                        </label>
                    @endforeach
                </div>

                <x-form-error name="cozinhas"></x-form-error>
            </div>

            <div class="form-group">
                <label class="label-categorias">Refeição</label>

                <div class="checkbox-grid">
                    @foreach ($refeicoes as $refeicao)
                        <label class="checkbox-card">
                            <input type="checkbox" name="refeicoes[]" value="{{ $refeicao->id }}">
                            <span>{{ $refeicao->refeicao }}</span>
                        </label>
                    @endforeach
                </div>

                <x-form-error name="refeicoes"></x-form-error>
            </div>

            <div class="form-group">
                <label for="dificuldade_id">Dificuldade</label>
                <select id="dificuldade_id" name="dificuldade_id" required>
                    @foreach ($dificuldades as $dificuldade)
                        <option value="{{ $dificuldade->id }}">{{ $dificuldade->dificuldade }}</option>
                    @endforeach
                </select>
                <x-form-error name='dificuldade_id'></x-form-error>
            </div>

            <div class="form-group">
                <label for="custo_id">Custo</label>
                <select id="custo_id" name="custo_id" required>
                    @foreach ($custos as $custo)
                        <option value="{{ $custo->id }}">{{ $custo->custo }}</option>
                    @endforeach
                </select>
                <x-form-error name='custo_id'></x-form-error>
            </div>

            <button type="submit" class="btn-primary">Salvar Receita</button>
        </form>
    </section>

</x-layout>
