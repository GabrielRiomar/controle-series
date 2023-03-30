@extends ('layout')

@section('cabecalho')
Adicionar série
@endsection

@section('conteudo')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post">
    <div class="form-group">
        @csrf
        <label for="nome" class="">Nome da Série:</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <button class="btn btn-primary mt-2">ADICIONAR</button>
    <a href="/series" class="btn btn-primary mt-2">VOLTAR</a>
</form>
@endsection