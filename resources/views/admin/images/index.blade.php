@extends('_template1')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Galeria de Imagens de: </h1>
            <h2><strong>{{ $artigo->titulo }}</strong></h2>
            <a href="{{ route('images.create',['id' => $artigo->id]) }}" class="btn btn-success">Cadastrar Imagem</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Extension</th>
                    <th>Ações</th>
                </tr>


                @foreach($artigo->images as $image)
                    <tr>

                        <td>{{ $image->id }}</td>
                        <td><img src="{{ url('uploads/'.$image->id.'.'.$image->extension) }}" alt="" width="84px"></td>
                        <td>{{ $image->extension }}</td>
                        <td>

                            <a href="{{ route('images.destroy', ['id' => $image->id]) }}" class="btn-default">Excluir</a>
                        </td>

                    </tr>
                @endforeach

            </table>

            <a href="{{ route('artigo.index') }}" class="btn btn-default">Voltar</a>

        </div>



    </div>
@endsection