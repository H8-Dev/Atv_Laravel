@foreach ($tarefas as $tarefa)
    
        <li>
            {{ $tarefa }}
            @if($loop->first)
                [DESTAQUE]
        </li>
@endforeach