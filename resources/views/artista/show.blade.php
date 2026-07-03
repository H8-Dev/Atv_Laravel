<div>
    <li>Nome: {{ $artista->name }}</li>
    <li>Foto: {{ $artista->artista_id  }}</li>
    <li>Inicio de carreira: {{ $artista->data_origem  }}</li>

    <form action="{{ route('artistas.destroy', $artista)}} " method="post">
        @csrf
        @method('DELETE')
        <input type="text" name="id" hidden value="{{ $artista->id }}"/>
        <button type="submit">X</button>
    </form>
    <a href="{{ route('artistas.edit', $artista)}}">Editar Artista</a>
</div>