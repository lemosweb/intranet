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
                    <th>Aprovação</th>
                    <th>Status</th>
                    <th>Favorito</th>
                    <th>Ações</th>
                </tr>


                @foreach($artigos as $artigo)
                    <tr>
                        <td>{{ $artigo->id }}</td>
                        <td>{{ $artigo->titulo }}</td>
                        <td>{{ $artigo->user->name }}</td>
                        <td>{{ $artigo->setor->nome }}</td>
                        <td>{{ $artigo->categoria->nome }}</td>
                        <td>{{ ($artigo->status_aprovacao == true ? 'Aprovado' : 'Pendente') }}</td>
                        <td>{{ ($artigo->status == true ? 'Ativo' : 'Inativo')}} - ( {{ ($artigo->status == true ? 'Valido até :'.$artigo->validade : 'Inativo desde :'.$artigo->validade) }} )</td>
                        <td>

                            <a href="{{ route('artigo.favorito', ['id' => $artigo->id ]) }}" class="btn btn-{{ ($artigo->favorito == true ? 'success' : 'default') }}">
                                {{ ($artigo->favorito == true ? 'Sim' : 'Não') }}</a>

                        </td>
                        <td>
                            @can('only-master')

                            <a href="{{ route('artigo.aprovar', ['id' => $artigo->id ]) }}" class="btn btn-{{ ($artigo->status_aprovacao == true ? 'success' : 'warning') }}">
                                {{ ($artigo->status_aprovacao == true ? 'Aprovado' : 'Aprovar') }}</a>

                            @endcan
                            <a href="{{ route('images.index', ['id' => $artigo->id]) }}" class="btn btn-default">Imagens</a>
                            <a href="{{ route('artigo.edit', ['id' => $artigo->id ]) }}" class="btn btn-default">Editar</a>

                            @can('only-master')
                            <a href="{{ route('artigo.destroy', ['id' => $artigo->id ]) }}" class="btn btn-danger">Excluir</a>
                            @endcan

                        </td>

                    </tr>
                @endforeach

            </table>
            {{ $artigos->render() }}
        </div>





@endsection