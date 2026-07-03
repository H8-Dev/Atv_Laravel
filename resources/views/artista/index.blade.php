<a href="{{ route('artistas.create') }}">Adicionar artista</a>
@if (session('success'))
    <span>{{ session('success') }}</span>
@endif
<ul>

@foreach ($artista as $artistas)
    <li>
        {{ $artistas->titulo }} <a href="/albuns/{{ $artistas->id }}">Detalhes</a>
    </li>
@endforeach
</ul>