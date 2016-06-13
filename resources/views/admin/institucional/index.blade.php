@extends('_template1')

@section('content')



    <div class="container">
        <div class="page-header">
            <h1>Institucional</h1>
            @foreach($institucional as $texto)
            <div class="col-lg-offset-1">
                <a href="{{ route('institucional.edit', ['id' => $texto->id ]) }}" class="btn btn-default">Editar</a>
            </div>




                <div class="container">
                    <div class="jumbotron">
                        <h1>{{ $texto->titulo }}</h1>
                        <p>  {{ $texto->texto }} </p>
                    </div>

                </div>




                @endforeach









@endsection