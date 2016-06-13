@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Resposta</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($resposta,['route' => ['respostas.update', $resposta->id], 'method' => 'put']) !!}

        {!! Form::hidden('enquete_id', $resposta->enquete_id) !!}

        <div class="form-group">
            {!! Form::label('resposta', 'Resposta: ') !!}
            <input type="text" name="resposta" value="{!! $resposta->resposta !!}" class="form-control">
        </div>

        <div class="form-group">
            {!! Form::submit('Atualizar Resposta', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection