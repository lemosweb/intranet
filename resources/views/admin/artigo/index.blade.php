@extends('_template1')

@section('content')



    <div class="container">
        <div class="page-header">
            <h1>Artigos</h1>
            <a href="{{ route('artigo.cadastrar') }}" class="btn btn-success">Cadastrar Artigos</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Publicado por</th>
                    <th>Setor</th>
                    <th>Categoria</th>
                    <th>Status Aprovação</th>
                    <th>Favorito</th>
                    <th>Ações</th>
                </tr>


                @foreach($artigos as $artigo)
                    <tr>
                        <td>{{ $artigo->id }}</td>
                        <td>{{ $artigo->titulo }}</td>
                        <td>{{ $artigo->user->name }}</td>
                        <td>{{ $artigo->user->setor->nome }}</td>
                        <td>{{ $artigo->categoria->nome }}</td>
                        <td>{{ $artigo->status_aprovacao }}</td>
                        <td>{{ $artigo->favorito }}</td>
                        <td><a href="{{ route('artigo.edit', ['id' => $artigo->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('artigo.destroy', ['id' => $artigo->id ]) }}" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach

            </table>
            {{ $artigos->render() }}
        </div>





@endsection