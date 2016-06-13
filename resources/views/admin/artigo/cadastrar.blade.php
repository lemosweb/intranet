@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Artigo</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => 'artigo.store']) !!}


        @can('only-master')
        <div class="form-group">
            {!! Form::label('setor', 'Setor: ') !!}
            {!! Form::select('setor_id', $setores->lists('nome', 'id')) !!}
        </div>
        @endcan

        <div class="form-group">
            {!! Form::label('categoria', 'Categoria: ') !!}
            {!! Form::select('categoria_id', $categorias->lists('nome', 'id')) !!}
        </div>


        <div class="form-group">
            {!! Form::label('titulo', 'Titulo: ') !!}
            {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('validade', 'Artigo válido até: ') !!}
            {!! Form::date('validade', \Carbon\Carbon::now()) !!}
        </div>

        <div class="form-group">
            {!! Form::label('texto', 'Texto: ') !!}
            {{ Form::textarea('texto', null, ['class' => 'form-control']) }}
        </div>


        <div class="form-group">
            {!! Form::submit('Cadastrar Artigo', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection