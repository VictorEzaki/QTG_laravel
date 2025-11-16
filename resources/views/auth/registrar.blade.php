<x-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/registrar.css') }}">
    @endpush

    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    </x-slot:styles>

    <form id="form-registro" action="/registrar" method="POST">
        @csrf
        <div>
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome" :value="old('nome')" placeholder="Fulano...">

            <x-form-error name='nome'></x-form-error>
        </div>

        <div>
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" :value="old('email')" placeholder="fulano@gmail.com">

            <x-form-error name='email'></x-form-error>
        </div>

        <div>
            <label for="senha">Senha</label>
            <input id="senha" type="password" name="senha">

            <x-form-error name='senha'></x-form-error>
        </div>

        <div>
            <label for="dt_nascimento">Data de nascimento</label>
            <input id="dt_nascimento" type="date" name="dt_nascimento" :value="old('dt_nascimento')">
        </div>

        <div>
            <label for="cep">CEP</label>
            <input id="cep" type="number" name="cep" :value="old('cep')">
        </div>

        <div id="genero">
            <label>Gênero</label>
            <span>
                <label for="genero-masculino">Masculino</label>
                <input id="genero-masculino" type="radio" name="genero" value="1">
                <label for="genero-feminino">Feminino</label>
                <input id="genero-feminino" type="radio" name="genero" value="0">
            </span>
        </div>

        <button id="button" type="submit">Inscrever</button>
    </form>
</x-layout>
