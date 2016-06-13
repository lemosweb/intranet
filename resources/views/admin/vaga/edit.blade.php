@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Vaga</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($vaga,['route' => ['vaga.update', $vaga->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('setor', 'Setor: ') !!}
            {!! Form::select('setor_id', $setores->lists('nome', 'id')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cargo', 'Cargo: ') !!}
            {!! Form::select('cargo_id', $cargos->lists('nome', 'id')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nome', 'Usuário: ') !!}
            {!! Form::select('user_id', $users->lists('name', 'id')) !!}
        </div>


        <div class="form-group">
            {!! Form::label('validade', 'Artigo válido até: ') !!}
            {!! Form::date('validade', \Carbon\Carbon::now()) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição: ') !!}
            {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Atualizar Vaga', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection