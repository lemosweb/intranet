@extends('_template1')

@section('content')



    <div class="container">
        <div class="page-header">

            <h1> Resultado </h1>



        </div>

        <div class="container">

            <p>{{ Auth::user()->name }}, você já respondeu a esta enquete</p>

                <h3> <strong>Enquete:</strong></h3>

                <h4>{{ $resultado->pergunta }}</h4>

                @foreach($resultado->respostas as $resposta)

                    <p><strong>{{ $resposta->resposta }}</strong> --> {{ $resposta->qtd_respostas }} Votos</p>

                @endforeach

        </div>

    </div>





@endsection