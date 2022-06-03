@extends('livros.layout')
@section('content')


    <div class="card">
        <div class="card-header">Detalhes</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Nome : {{ $livro->nome }}</h5>
                <p class="card-text">Descrição : {{ $livro->descricao }}</p>
            </div>

            </hr>

        </div>
    </div>
