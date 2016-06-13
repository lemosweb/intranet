@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Resposta</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => ['respostas.store', $id], 'method' => 'post']) !!}


            {!! Form::hidden('enquete_id', $id) !!}

        <div class="form-group">
            {!! Form::label('resposta', 'Resposta: ') !!}
            {!! Form::text('resposta', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Cadastrar Resposta', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection