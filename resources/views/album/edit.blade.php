<form method="post" action="{{ route('albuns.update', $album) }}">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" value="{{ $album->titulo }}">
    <input type="text" name="artista_id" value="{{ $album->artista_id }}">
    <input type="text" name="ano_lancamento" value="{{ $album->ano_lancamento }}">
    <input type="text" name="url_imagem" value="{{ $album->url_imagem }}">
    <button type="submit">Atualizar</button>
</form>