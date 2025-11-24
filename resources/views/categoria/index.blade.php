<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    </x-slot:styles>



    <div>
        @foreach ($categorias as $categoria)
            <a>
                <div>
                    {{ $categoria->categoria }}
                </div>
 
                <div>
                    <strong>Status: {{ $categoria->ativo == 1 ? 'Ativo' : 'Inativo' }}</strong>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
