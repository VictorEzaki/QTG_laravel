<x-layout>
  @push('styles')
    <link rel="stylesheet" href="{{ asset('css/registrar.css') }}">
  @endpush
  <form id="form-registro" action="/registrar" method="POST">
    @csrf
    <div>
      <label for="nome">Nome</label>
      <input id="nome" type="text" name="nome" placeholder="Fulano...">
    </div>

    <div>
      <label for="email">E-mail</label>
      <input id="email" type="email" name="email" placeholder="fulano@gmail.com">
    </div>

    <div>
      <label for="senha">Senha</label>
      <input id="senha" type="password" name="senha">
    </div>

    <div>
      <label for="dt_nascimento">Data de nascimento</label>
      <input id="dt_nascimento" type="date" name="dt_nascimento">
    </div>

    <div>
      <label for="cep">CEP</label>
      <input id="cep" type="number" name="cep">
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
