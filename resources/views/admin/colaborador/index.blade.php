@extends('_template1')

@section('content')



    <div class="container">
        <div class="page-header">
            <h1>Colaboradores</h1>
            <a href="{{ route('colaborador.cadastrar') }}" class="btn btn-success">Cadastrar Colaborador</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Colaborador</th>
                    <th>Setor</th>
                    <th>Cargo</th>
                    <th>Tipo de Usuário</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>


                @foreach($colaboradores as $colaborador)
                    <tr>
                        <td>{{ $colaborador->id }}</td>
                        <td>{{ $colaborador->name }}</td>
                        <td>{{ $colaborador->setor->nome }}</td>
                        <td>{{ $colaborador->cargo->nome }}</td>
                        <td>{{ $tipo = ($colaborador->nivel_de_acesso == 2 ? 'Master' : ($colaborador->nivel_de_acesso == 1 ? 'Lider do Setor' :  'Usuário Padrão'))}}</td>
                        <td>{{ $status = ($colaborador->status == 1 ? 'Ativo' : 'Inativo') }}</td>
                        <td><a href="{{ route('colaborador.edit', ['id' => $colaborador->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('colaborador.destroy', ['id' => $colaborador->id ]) }}" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach

            </table>
            {{ $colaboradores->render() }}
        </div>





@endsection