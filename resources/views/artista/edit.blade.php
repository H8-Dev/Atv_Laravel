<form method="post" action="{{ route('artistas.update', $artista) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $artista->name }}">
    <input type="text" name="foto_url" value="{{ $artista->foto_url }}">
    <input type="text" name="data_origem" value="{{ $artista->data_origem }}">
    <button type="submit">Atualizar</button>
</form>