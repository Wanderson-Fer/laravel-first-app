@extends('layouts.app')

@section('title', 'Jogos')

@section('content')
    <!-- Tudo aqui é renderizado no template -->
    <div class="row mt-4">
        <div class="col-sm-10">
            <h1>Jogos</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('jogos.create') }}" class="btn btn-primary">Novo jogo</a>
        </div>
    </div>
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano de Criação</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($jogos as $jogo)
            <tr>
                <th scope="row">{{ $jogo->id }}</th>
                <td>{{ $jogo->nome }}</td>
                <td>{{ $jogo->categoria }}</td>
                <td>{{ $jogo->ano_criação }}</td>
                <td>{{ $jogo->valor }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection
