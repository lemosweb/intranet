@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Colaborador</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($colaborador,['route' => ['colaborador.update', $colaborador->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('setor', 'Setor: ') !!}
            {!! Form::select('setor_id', $setores->lists('nome', 'id')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cargo', 'Cargo: ') !!}
            {!! Form::select('cargo_id', $cargos->lists('nome', 'id')) !!}
        </div>


        <div class="form-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email: ') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Senha: ') !!}
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nivel', 'Nivel de Acesso: ') !!}
            {!! Form::select('nivel_de_acesso', array('0' => 'Usuario Padrão', '1' => 'Líder do Setor', '2' => 'Master')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'Status do Usuário: ') !!}

            <div class="form-group">
                {!! Form::radio('status',true) !!}
                {!! Form::label('status', 'Ativo ') !!}
            </div>

            <div class="form-group">
                {!! Form::radio('status',true) !!}
                {!! Form::label('status', 'Intativo ') !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Atualizar Colaborador', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>

@endsection