<div>
    <li>Titulo: {{ $music->titulo  }}</li>
    <li>Artista: {{ $music->artista  }}</li>
    <li>Album: {{ $music->album_id  }}</li>
    <li>Duração: {{ $music->duracao  }}</li>

    <form action="{{ route('musics.destroy', $music)}} " method="post">
        @csrf
        @method('DELETE')
        <input type="text" name="id" hidden value="{{ $music->id }}"/>
        <button type="submit">X</button>
    </form>
    <a href="{{ route('musics.edit', $music)}}">Editar Música</a>
</div>