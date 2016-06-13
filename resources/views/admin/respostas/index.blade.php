@extends('_template1')

@section('content')

    <div class="container">
        <div class="page-header">
            <h2>Respostas</h2>
            <h1>{{ $enquete->pergunta }}</h1>
            <a href="{{ route('respostas.cadastrar', ['id' => $enquete->id ]) }}" class="btn btn-success">Cadastrar Respostas</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Resposta</th>

                    <th>Ações</th>
                </tr>

                @foreach($enquete->respostas as $resposta)
                    <tr>
                        <td>{{ $resposta->id }}</td>
                        <td>{{ $resposta->resposta }}</td>

                        <td><a href="{{ route('respostas.edit', ['id' => $resposta->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('respostas.destroy', ['id' => $resposta->id ]) }}" class="btn btn-danger">Excluir</a>
                        </td>


                    </tr>
                @endforeach


            </table>

        </div>





    </div>
@endsection