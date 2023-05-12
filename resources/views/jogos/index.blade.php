@extends('layouts.app')

@section('title', 'Jogos')

@section('content')
    <!-- Tudo aqui é renderizado no template -->
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
