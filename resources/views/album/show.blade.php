<div>
    <li>Titulo: {{ $album->titulo  }}</li>
    <li>Artista: {{ $album->artista_id  }}</li>
    <li>Ano de Lançamento: {{ $album->ano_lancamento  }}</li>
    <li>Imagem: {{ $album->url_imagem  }}</li>

    <form action="{{ route('albuns.destroy', $album)}} " method="post">
        @csrf
        @method('DELETE')
        <input type="text" name="id" hidden value="{{ $album->id }}"/>
        <button type="submit">X</button>
    </form>
    <a href="{{ route('albuns.edit', $album)}}">Editar Album</a>
</div>