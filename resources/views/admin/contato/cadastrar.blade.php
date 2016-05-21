@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Contato</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => 'contato.store']) !!}


        <div class="form-group">
            {!! Form::label('user', 'Usuario: ') !!}
            {!! Form::select('user_id', $users->lists('name', 'id')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone: ') !!}
            {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nextel', 'Nextel: ') !!}
            {!! Form::text('nextel', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('empresa', 'Empresa: ') !!}
            {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereco: ') !!}
            {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Cadastrar Contato', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection