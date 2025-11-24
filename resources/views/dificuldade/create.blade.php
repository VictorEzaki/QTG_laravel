<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/categoria.css') }}">
    </x-slot:styles>


    <form id="form-registro" action="/dificuldade" method="POST">
        @csrf

        <div>
            <label for="dificuldade">Dificulade</label>
            <input id="dificuldade" type="text" name="dificuldade" placeholder="Difícil, fácil...">

            <x-form-error name='dificuldade'></x-form-error>
        </div>

        <button id="button" type="submit">Criar</button>
    </form>
</x-layout>
