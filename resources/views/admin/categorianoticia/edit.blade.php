@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Categoria de Noticia</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($categorianoticia,['route' => ['categorianoticia.update', $categorianoticia->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Setor: ') !!}
            {!! Form::label('nome', 'Setor: ') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Atualizar Categoria', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection