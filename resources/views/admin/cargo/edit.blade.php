@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Setor</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($cargo,['route' => ['cargo.update', $cargo->id], 'method' => 'put']) !!}


        <div class="form-group">
            {!! Form::label('nome', 'Cargo: ') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Atualizar Cargo', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection