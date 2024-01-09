<h2>Informacion del pokemon:</h2>

    <p><strong>ID:</strong> {{ $pokemon->id }}</p>
    <p><strong>Nombre:</strong> {{ $pokemon->nombre }}</p>
    <p><strong>Tipo:</strong> {{ $pokemon->tipo }}</p>
    <p><strong>Tamaño:</strong> {{ $pokemon->tamaño }}</p>
    <p><strong>Peso:</strong> {{ $pokemon->peso }}</p>

    <a href="{{ route('pokemons.index') }}" class="btn btn-primary">Volver al listado</a>
