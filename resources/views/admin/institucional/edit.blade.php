@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar institucional</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($institucional,['route' => ['institucional.update', $institucional->id], 'method' => 'put']) !!}



        <div class="form-group">
            {!! Form::label('titulo', 'Titulo: ') !!}
            {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('texto', 'Texto: ') !!}
            {{ Form::textarea('texto', null, ['class' => 'form-control']) }}
        </div>


        <div class="form-group">
            {!! Form::submit('Atualizar Texto Institucional', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection