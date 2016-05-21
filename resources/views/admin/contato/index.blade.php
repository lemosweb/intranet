@extends('_template1')

@section('content')



    <div class="container">
        <div class="page-header">
            <h1>Contatos</h1>
            <a href="{{ route('contato.cadastrar') }}" class="btn btn-success">Cadastrar contatos</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cadastrado por</th>
                    <th>telefone</th>
                    <th>nextel</th>
                    <th>Empresa</th>
                    <th>Ações</th>
                </tr>


                @foreach($contatos as $contato)
                    <tr>
                        <td>{{ $contato->id }}</td>
                        <td>{{ $contato->nome }}</td>
                        <td>{{ $contato->user->name }}</td>
                        <td>{{ $contato->telefone }}</td>
                        <td>{{ $contato->nextel }}</td>
                        <td>{{ $contato->empresa }}</td>
                        <td><a href="{{ route('contato.edit', ['id' => $contato->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('contato.destroy', ['id' => $contato->id ]) }}" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach

            </table>
            {{ $contatos->render() }}
        </div>





@endsection