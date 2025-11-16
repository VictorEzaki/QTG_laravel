<x-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/registrar.css') }}">
    @endpush

    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    </x-slot:styles>

    <form id="form-registro" action="/login" method="POST">
        @csrf

        <div>
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" placeholder="fulano@gmail.com">

            <x-form-error name='email'></x-form-error>
        </div>

        <div>
            <label for="senha">Senha</label>
            <input id="senha" type="password" name="senha">

            <x-form-error name='senha'></x-form-error>
        </div>

        <button id="button" type="submit">Entrar</button>
    </form>
</x-layout>
