<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/categoria.css') }}">
    </x-slot:styles>



    <form id="form-registro" action="/categoria/store" method="POST">
        @csrf

        <div>
            <label for="categoria">Nome da Categoria</label>
            <input id="categoria" type="text" name="categoria" placeholder="Massas, sobremesa...">

            <x-form-error name='categoria'></x-form-error>
        </div>

        <div>
            <label for="ativo">Ativo</label>
            <label class="switch">
                <input id="ativo" type="checkbox" name="ativo" value="1">
                <span class="slider"></span>
            </label>
        </div>

        <div class="custom-select">
            <div class="selected">Selecione uma ou mais opções</div>

            <ul class="options">
                <li data-value="1">Opção 1</li>
                <li data-value="2">Opção 2</li>
                <li data-value="3">Opção 3</li>
            </ul>

            <!-- Agora multiple -->
            <select name="categoria[]" id="categoria" multiple hidden>
                <option value="1">Opção 1</option>
                <option value="2">Opção 2</option>
                <option value="3">Opção 3</option>
            </select>
        </div>

        <script>
            document.querySelectorAll('.custom-select').forEach(select => {
                const selectedBox = select.querySelector('.selected');
                const options = select.querySelector('.options');
                const realSelect = select.querySelector('select');

                let selectedValues = [];

                // Abre/fecha dropdown
                selectedBox.addEventListener('click', () => {
                    options.style.display = options.style.display === 'block' ? 'none' : 'block';
                });

                // Clique nas opções
                options.querySelectorAll('li').forEach(option => {
                    option.addEventListener('click', () => {
                        const value = option.dataset.value;
                        const text = option.textContent;

                        if (selectedValues.includes(value)) {
                            // Se já estiver selecionado: remover
                            selectedValues = selectedValues.filter(v => v !== value);
                        } else {
                            // Adicionar seleção
                            selectedValues.push(value);
                        }

                        updateUI();
                    });
                });

                function updateUI() {
                    selectedBox.innerHTML = "";

                    if (selectedValues.length === 0) {
                        selectedBox.textContent = "Selecione uma ou mais opções";
                    }

                    // Render tags
                    selectedValues.forEach(value => {
                        const optionText = options.querySelector(`li[data-value="${value}"]`).textContent;

                        const tag = document.createElement('span');
                        tag.classList.add('tag');
                        tag.innerHTML = `${optionText} <span class="remove" data-value="${value}">×</span>`;

                        selectedBox.appendChild(tag);
                    });

                    // Atualiza o SELECT real
                    [...realSelect.options].forEach(opt => {
                        opt.selected = selectedValues.includes(opt.value);
                    });

                    // Remover tag ao clicar no X
                    select.querySelectorAll('.remove').forEach(removeBtn => {
                        removeBtn.addEventListener('click', e => {
                            const value = e.target.dataset.value;
                            selectedValues = selectedValues.filter(v => v !== value);
                            updateUI();
                        });
                    });
                }

                // Fecha ao clicar fora
                document.addEventListener('click', e => {
                    if (!select.contains(e.target)) {
                        options.style.display = 'none';
                    }
                });
            });
        </script>



        <button id="button" type="submit">Criar</button>
    </form>
</x-layout>
