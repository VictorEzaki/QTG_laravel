<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/categoria.css') }}">
    </x-slot:styles>


    <form id="form-registro" action="/refeicao" method="POST">
        @csrf

        <div>
            <label for="refeicao">Refeição</label>
            <input id="refeicao" type="text" name="refeicao" placeholder="jantar">

            <x-form-error name='refeicao'></x-form-error>
        </div>

        <div>
            <label for="ativo">Ativo</label>
            <label class="switch">
                <input id="ativo" type="checkbox" name="ativo" value="1">
                <span class="slider"></span>
            </label>
        </div>

        <button id="button" type="submit">Criar</button>
    </form>
</x-layout>
