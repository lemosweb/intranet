@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Cargo</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => 'cargo.store']) !!}


        <div class="form-group">
            {!! Form::label('nome', 'Cargo: ') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Cadastrar cargo', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection