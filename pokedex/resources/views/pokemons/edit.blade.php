<h2>Editar Pokémon</h2>

    <form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $pokemon->nombre }}" required>

        <label for="tipo">Tipo:</label>
        <select name="tipo" required>
            <option value="agua" {{ $pokemon->tipo == 'agua' ? 'selected' : '' }}>Agua</option>
            <option value="fuego" {{ $pokemon->tipo == 'fuego' ? 'selected' : '' }}>Fuego</option>
            <option value="planta" {{ $pokemon->tipo == 'planta' ? 'selected' : '' }}>Planta</option>
            <option value="hada" {{ $pokemon->tipo == 'hada' ? 'selected' : '' }}>Hada</option>
        </select>

        <label for="tamaño">Tamaño:</label>
        <select name="tamaño" required>
            <option value="grande" {{ $pokemon->tamaño == 'grande' ? 'selected' : '' }}>Grande</option>
            <option value="mediano" {{ $pokemon->tamaño == 'mediano' ? 'selected' : '' }}>Mediano</option>
            <option value="pequeño" {{ $pokemon->tamaño == 'pequeño' ? 'selected' : '' }}>Pequeño</option>
        </select>

        <label for="peso">Peso:</label>
        <input type="number" name="peso" step="0.01" value="{{ $pokemon->peso }}" required>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>

