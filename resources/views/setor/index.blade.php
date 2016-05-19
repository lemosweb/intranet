@extends('_template1')

@section('content')



    <div class="container">
        <div class="page-header">
            <h1>Setores</h1>
            <a href="{{ route('setor.cadastrar') }}" class="btn btn-success">Cadastrar Setor</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Setor</th>
                    <th>Ações</th>
                </tr>


                @foreach($setores as $setor)
                    <tr>
                        <td>{{ $setor->id }}</td>
                        <td>{{ $setor->nome }}</td>
                        <td><a href="{{ route('setor.edit', ['id' => $setor->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="#" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach

            </table>
            {{ $setores->render() }}
        </div>





@endsection