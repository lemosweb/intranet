@extends('_template1')

@section('content')



    <div class="container">
        <div class="page-header">
            <h1>Noticias</h1>
            <a href="{{ route('noticia.cadastrar') }}" class="btn btn-success">Cadastrar noticias</a>
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


                @foreach($noticias as $noticia)
                    <tr>
                        <td>{{ $noticia->id }}</td>
                        <td>{{ $noticia->titulo }}</td>
                        <td>{{ $noticia->user->name }}</td>
                        <td>{{ $noticia->setor->nome }}</td>
                        <td>{{ $noticia->categoria->nome }}</td>
                        <td>{{ ($noticia->status_aprovacao == true ? 'Aprovado' : 'Pendente') }}</td>
                        <td>{{ ($noticia->status == true ? 'Ativo' : 'Inativo')}} - ( {{ ($noticia->status == true ? 'Valido até :'.$noticia->validade : 'Inativo desde :'.$noticia->validade) }} )</td>
                        <td>

                            <a href="{{ route('noticia.favorito', ['id' => $noticia->id ]) }}" class="btn btn-{{ ($noticia->favorito == true ? 'success' : 'default') }}">
                                {{ ($noticia->favorito == true ? 'Sim' : 'Não') }}</a>

                        </td>
                        <td>
                            @can('only-master')

                            <a href="{{ route('noticia.aprovar', ['id' => $noticia->id ]) }}" class="btn btn-{{ ($noticia->status_aprovacao == true ? 'success' : 'warning') }}">
                                {{ ($noticia->status_aprovacao == true ? 'Aprovado' : 'Aprovar') }}</a>

                            @endcan
                            <a href="{{ route('images.index', ['id' => $noticia->id]) }}" class="btn btn-default">Imagens</a>
                            <a href="{{ route('noticia.edit', ['id' => $noticia->id ]) }}" class="btn btn-default">Editar</a>

                            @can('only-master')
                            <a href="{{ route('noticia.destroy', ['id' => $noticia->id ]) }}" class="btn btn-danger">Excluir</a>
                            @endcan

                        </td>

                    </tr>
                @endforeach

            </table>
            {{ $noticias->render() }}
        </div>





@endsection