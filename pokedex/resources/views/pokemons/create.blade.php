<h2>Nuevo Pokémon</h2>

    <form action="{{ route('pokemons.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="tipo">Tipo:</label>
        <select name="tipo" required>
            <option value="agua">Agua</option>
            <option value="fuego">Fuego</option>
            <option value="planta">Planta</option>
            <option value="hada">Hada</option>
        </select>

        <label for="tamaño">Tamaño:</label>
        <select name="tamaño" required>
            <option value="grande">Grande</option>
            <option value="mediano">Mediano</option>
            <option value="pequeño">Pequeño</option>
        </select>

        <label for="peso">Peso:</label>
        <input type="number" name="peso" step="0.01" required>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

