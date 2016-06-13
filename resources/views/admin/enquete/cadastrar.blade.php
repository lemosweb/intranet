@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Enquete</h1>
        </div>
        @include('error_template')
    </div>

    @if(isset($message) && !empty($message))
        <div class="alert alert-info">
            <strong>Mensagem : </strong> {{ $message }}
        </div>
    @endif

    <div class="container">
        {!! Form::open(['route' => 'enquete.store']) !!}


        @can('only-master')
        <div class="form-group">
            {!! Form::label('setor', 'Setor: ') !!}
            {!! Form::select('setor_id', $setores->lists('nome','id')) !!}
        </div>
        @endcan


        <div class="form-group">
            {!! Form::label('data_fim', 'Enquete Válida Até: ') !!}
            {!! Form::date('data_fim', \Carbon\Carbon::now()) !!}
        </div>

        <div class="form-group">
            {!! Form::label('pergunta', 'Pergunta: ') !!}
            {!! Form::text('pergunta', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Cadastrar Enquete', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection