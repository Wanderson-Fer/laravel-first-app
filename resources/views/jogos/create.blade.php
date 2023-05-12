@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <div class="container">
        <h1 class="mt-5">Crie um novo jogo</h1>
        <hr>

        <form action="{{ route('jogos.store') }}" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group mt-4">
                    <label for="nome">NOME:</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite um nome...">
                </div>
                <div class="form-group mt-4">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Digite uma categoria...">
                </div>
                <div class="form-group mt-4">
                    <label for="ano_criação">Ano de criação:</label>
                    <input type="number" name="ano_criação" id="ano_criação" class="form-control" placeholder="Informe o ano de criação...">
                </div>
                <div class="form-group mt-4">
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" id="valor" class="form-control" placeholder="Informe o valor do jogo...">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary mt-3 left" type="submit"><strong>Enviar</strong></button>
                </div>
            </div>
        </form>
    </div>
@endsection
