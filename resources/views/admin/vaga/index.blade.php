@extends('_template1')

@section('content')



    <div class="container">
        <div class="page-header">
            <h1>Vagas</h1>
            <a href="{{ route('vaga.cadastrar') }}" class="btn btn-success">Cadastrar vagas</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Vaga</th>
                    <th>Setor</th>
                    <th>Descrição</th>
                    <th>Validade</th>
                    <th>Status</th>
                    <th>Cadastrado por</th>
                    <th>Ações</th>
                </tr>


                @foreach($vagas as $vaga)
                    <tr>
                        <td>{{ $vaga->id }}</td>
                        <td>{{ $vaga->cargo->nome }}</td>
                        <td>{{ $vaga->setor->nome }}</td>
                        <td>{{ $vaga->descricao}}</td>
                        <td>{{ $vaga->validade }}</td>
                        <td>{{ ($vaga->status == true ? 'Ativo' : 'Inativo') }}</td>
                        <td>{{ $vaga->user->name }}</td>
                        <td><a href="{{ route('vaga.edit', ['id' => $vaga->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('vaga.destroy', ['id' => $vaga->id ]) }}" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach

            </table>
            {{ $vagas->render() }}
        </div>





@endsection