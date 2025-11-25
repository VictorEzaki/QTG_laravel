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

        <button class="btn-comentar" id="openModal">Adicionar Comentário</button>

        <div class="modal-overlay" id="modalOverlay">
            <div class="modal">
                <h2>Adicionar Comentário</h2>

                <form id="formComentario">
                    @csrf
                    <input type="hidden" name="receita_id" value="{{ $receita->id }}">

                    <textarea name="comentario" placeholder="Escreva seu comentário..." required></textarea>

                    <div class="rating">
                        <input type="radio" id="estrela5" name="nota" value="5" required>
                        <label for="estrela5">★</label>

                        <input type="radio" id="estrela4" name="nota" value="4">
                        <label for="estrela4">★</label>

                        <input type="radio" id="estrela3" name="nota" value="3">
                        <label for="estrela3">★</label>

                        <input type="radio" id="estrela2" name="nota" value="2">
                        <label for="estrela2">★</label>

                        <input type="radio" id="estrela1" name="nota" value="1">
                        <label for="estrela1">★</label>
                    </div>

                    <div class="modal-actions">
                        <button type="button" id="closeModal" class="btn-cancelar">Cancelar</button>
                        <button type="submit" class="btn-salvar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <br><br>

        <div id="lista-comentarios">
            <strong>Comentários e avaliações:</strong>
        </div>

        <script>
            const usuarioLogado = "{{ Auth::user()->nome }}";
            const receitaId = "{{ $receita->id }}";
        </script>

        <script>
            const overlay = document.getElementById("modalOverlay");
            const openModal = document.getElementById("openModal");
            const closeModalBtn = document.getElementById("closeModal");
            const form = document.getElementById("formComentario");
            const listaComentarios = document.getElementById("lista-comentarios");

            openModal.onclick = () => overlay.style.display = "flex";
            closeModalBtn.onclick = () => overlay.style.display = "none";

            overlay.onclick = (e) => {
                if (e.target === overlay) overlay.style.display = "none";
            };


            form.addEventListener("submit", function(event) {
                event.preventDefault();

                const comentario = form.comentario.value.trim();
                const nota = form.nota.value;

                if (!comentario || !nota) return;

                let comentariosSalvos = JSON.parse(localStorage.getItem("comentarios_" + receitaId)) || [];

                comentariosSalvos.push({
                    usuario: usuarioLogado,
                    comentario: comentario,
                    nota: nota,
                    data: new Date().toLocaleString()
                });

                localStorage.setItem("comentarios_" + receitaId, JSON.stringify(comentariosSalvos));

                carregarComentarios();

                overlay.style.display = "none";
                form.reset();
            });


            function carregarComentarios() {
                let comentarios = JSON.parse(localStorage.getItem("comentarios_" + receitaId)) || [];

                listaComentarios.innerHTML = "";

                comentarios.forEach(c => {
                    const div = document.createElement("div");
                    div.classList.add("comentario-card");

                    div.innerHTML = `
            <p class="comentario-usuario">👤 <strong>${c.usuario}</strong></p>
            <p class="texto-comentario">${c.comentario}</p>
            <p class="nota-comentario">⭐ ${c.nota}</p>
            <span class="data-comentario">${c.data}</span>
        `;

                    listaComentarios.appendChild(div);
                });
            }

            carregarComentarios();
        </script>
    </div>

</x-layout>
