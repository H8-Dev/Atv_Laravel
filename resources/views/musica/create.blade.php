<form method="post" action="/musics">
    @csrf
    <input type="text" placeholder="Titulo" name="titulo">
    <input type="text" placeholder="Artista" name="artista">
    <input type="text" placeholder="Album ID" name="album_id">
    <input type="text" placeholder="Duracao" name="duracao">
    <button type="submit">Criar</button>
</form>