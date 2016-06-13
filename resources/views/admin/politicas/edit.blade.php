@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Categoria</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($categoria,['route' => ['categoria.update', $categoria->id], 'method' => 'put']) !!}

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