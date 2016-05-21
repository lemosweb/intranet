@extends('_template1')

@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Categorias</h1>
            <a href="{{ route('categoria.cadastrar') }}" class="btn btn-success">Cadastrar Categoria</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>categoria</th>
                    <th>Ações</th>
                </tr>


                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nome }}</td>
                        <td><a href="{{ route('categoria.edit', ['id' => $categoria->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('categoria.destroy', ['id' => $categoria->id ]) }}" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach

            </table>
            {{ $categorias->render() }}
        </div>



@endsection