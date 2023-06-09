@extends ('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
<a href="{{ route('form_add_series')}}" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
    @foreach ($series as $serie)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{$serie->nome}}
        <form method="post" action="series/remover/{{ $serie->id }}" onsubmit="return confirm('Tem certeza que quer continuar? {{ addslashes($serie->nome) }}')">
            @csrf
            @method ('DELETE')
            <button class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
        </form>
    </li>
    @endforeach
</ul>
@endsection