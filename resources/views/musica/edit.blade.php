<form method="post" action="{{ route('musics.update', $music) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $music->titulo }}">
    <input type="text" name="artista" value="{{ $music->artista }}">
    <input type="text" name="album_id" value="{{ $music->album_id }}">
    <input type="text" name="duracao" value="{{ $music->duracao }}">
    <button type="submit">Atualizar</button>
</form>