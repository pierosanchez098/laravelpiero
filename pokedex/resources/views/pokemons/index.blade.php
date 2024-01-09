<h2>Listado de Pokémon</h2>

    <a href="{{ route('pokemons.create') }}" class="btn btn-primary">Nuevo Pokémon</a>

   
    <div class="row">
    @foreach ($pokemons as $pokemon)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $pokemon->nombre }}</h5>
                    <p class="card-text">
                        <strong>ID:</strong> {{ $pokemon->id }}<br>
                        <strong>Tipo:</strong> {{ $pokemon->tipo }}<br>
                        <strong>Tamaño:</strong> {{ $pokemon->tamaño }}<br>
                        <strong>Peso:</strong> {{ $pokemon->peso }}<br>
                        <td>
                        <a href="{{ route('pokemons.show', $pokemon->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('pokemons.edit', $pokemon->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
</form>
                        </td>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

