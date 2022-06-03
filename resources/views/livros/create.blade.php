@extends('livros.layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">Adicionar Novo Livro</div>
        <div class="card-body">

            <form action="{{ url('livro') }}" method="post">
                {!! csrf_field() !!}
                <label>Nome</label></br>
                <input type="text" name="nome" id="nome" class="form-control"></br>
                <label>Descrição</label></br>
                <input type="text" name="descricao" id="descricao" class="form-control"></br>
                <input type="submit" value="Salvar" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
