@extends('_template1')

@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Categorias de Noticias</h1>
            <a href="{{ route('categorianoticia.cadastrar') }}" class="btn btn-success">Cadastrar Categoria</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>categoria</th>
                    <th>Ações</th>
                </tr>


                @foreach($categorianoticias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nome }}</td>
                        <td><a href="{{ route('categorianoticia.edit', ['id' => $categoria->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('categorianoticia.destroy', ['id' => $categoria->id ]) }}" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach

            </table>
            {{ $categorianoticias->render() }}
        </div>



@endsection