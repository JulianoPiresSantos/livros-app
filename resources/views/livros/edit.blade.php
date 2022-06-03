@extends('livros.layout')
@section('content')

    <div class="card">
        <div class="card-header">Editar Informações</div>
        <div class="card-body">

            <form action="{{ url('livro/' .$livro->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$livro->id}}" id="id" />
                <label>Nome</label></br>
                <input type="text" name="nome" id="nome" value="{{$livro->nome}}" class="form-control"></br>
                <label>Descrição</label></br>
                <input type="text" name="descricao" id="descricao" value="{{$livro->descricao}}" class="form-control"></br>
                <input type="submit" value="Atualizar" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop

