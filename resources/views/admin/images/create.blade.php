@extends('_template1')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Postar Imagem</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => ['images.store', $artigo->id], 'method' => 'post', 'enctype' => "multipart/form-data"]) !!}


        <div class="form-group">
            {!! Form::label('image', 'Image: ') !!}
            {!! Form::file('image', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Cadastrar Imagem',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection