@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Enquete</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($enquete,['route' => ['enquete.update', $enquete->id], 'method' => 'put']) !!}

        <div class="form-goup">
            {!! Form::label('data_fim', 'Enquete Válida Até: ') !!}
            {!! Form::date('data_fim') !!}
        </div>

        <div class="form-group">
            {!! Form::label('pergunta', 'Pergunta: ') !!}
            {!! Form::text('pergunta', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Atualizar enquete', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection