@extends('_template1')

@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Enquetes</h1>
            <a href="{{ route('enquete.cadastrar') }}" class="btn btn-success">Cadastrar Enquete</a>


            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Pergunta</th>
                    <th>Cadastrado por</th>
                    <th>Valida até</th>
                    <th>Status</th>
                    <th>Setor</th>
                    <th>Observação</th>
                    <th>Ações</th>

                </tr>


                @foreach($enquetes as $enquete)
                    <tr>
                        <td>{{ $enquete->id }}</td>
                        <td>{{ $enquete->pergunta }}</td>
                        <td>{{ $enquete->user->name }}</td>
                        <td>{{ $enquete->data_fim }}</td>
                        <td>{{ ($enquete->status == 0 ? 'Inativo' : 'Ativo') }}</td>
                        <td>{{ $enquete->setor->nome }}</td>
                        <td>@if($enquete->respostas->isEmpty())<strong> ENQUETE SEM ALTERNATIVAS! </strong>
                                @elseif($enquete->respostas->count() < 2) <strong> cadastre  mais uma alternativa! </strong>
                            @endif
                        </td>
                        <td><a href="{{ route('enquete.edit', ['id' => $enquete->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('enquete.destroy', ['id' => $enquete->id ]) }}" class="btn btn-danger">Excluir</a>
                            <a href="{{ route('respostas.index', ['id' => $enquete->id ]) }}" class="btn btn-default">Respostas</a>
                        </td>


                    </tr>
                @endforeach

            </table>
            {{ $enquetes->render() }}
        </div>



@endsection