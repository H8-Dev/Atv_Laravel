<form method="post" action="/albuns">
    @csrf
    <input type="text" name="titulo">
    <input type="text" name="artista_id">
    <input type="text" name="ano_lancamento">
    <input type="text" name="url_imagem">
    <button type="submit">Criar</button>
</form>