@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Setor</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($setor,['route' => ['setor.update', $setor->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Setor: ') !!}
            {!! Form::label('nome', 'Setor: ') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Atualizar Setor', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection