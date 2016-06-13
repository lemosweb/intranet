@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Politicas ou Procedimento</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => 'categoria.store']) !!}

        <div class="form-group">
            {!! Form::label('titulo', 'Titulo: ') !!}
            {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descricao: ') !!}
            {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Cadastrar Procedimento', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection