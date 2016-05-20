@extends('_template1')

@section('content')



    <div class="container">
        <div class="page-header">
            <h1>Cargo</h1>
            <a href="{{ route('cargo.cadastrar') }}" class="btn btn-success">Cadastrar cargo</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Cargo</th>
                    <th>Ações</th>
                </tr>


                @foreach($cargos as $cargo)
                    <tr>
                        <td>{{ $cargo->id }}</td>
                        <td>{{ $cargo->nome }}</td>
                        <td><a href="{{ route('cargo.edit', ['id' => $cargo->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('cargo.destroy', ['id' => $cargo->id ]) }}" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach

            </table>
            {{ $cargos->render() }}
        </div>



@endsection