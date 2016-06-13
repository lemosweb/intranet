@extends('_template1')

@section('content')


    <div class="container">
        <div class="page-header">
            <h1>Enquetes</h1>
        </div>

        @if($enquetes->isEmpty())

            <div class="container jumbotron">
                <div class="row">
                    <h2>Não há enquetes no momento</h2>
                </div>
            </div>

        @else

            @if(empty($enqueteAdmin))

                <div class="container well col-sm-6">
                    <div class="row">
                        <h2>Não há enquetes para seu setor no momento</h2>
                    </div>
                </div>

            @else

            <div class="container well col-sm-6">
                <div class="page-header">
                    <h1>{{ $enqueteAdmin->pergunta }}</h1>

                </div>

                <div class="container">

                    {!! Form::open(['route' => 'enqueteview.store']) !!}

                    @foreach($enqueteAdmin->respostas as $resposta)

                        <div class="form-group">

                            {!! Form::radio('resposta', $resposta->id, false) !!}
                            {!! Form::label('resposta', $resposta->resposta) !!}

                        </div>

                    @endforeach
                    <div class="form-group">
                        {!! Form::submit('Votar', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>

            </div>
            @endif


        <div class="container col-sm-5  col-lg-offset-1">

            @foreach($enquetes as $enquete)
                <div class="well ">
                    <h4>{{ $enquete->setor->nome }}</h4>
                    <h3>Enquete: {{ $enquete->pergunta }}</h3>

                @foreach($enquete->respostas as $resposta)

                    <div class="form-group">

                        <ul>
                            <li>{!! $resposta->resposta !!} - <strong> {{ $resposta->qtd_respostas }} Votos</strong></li>
                        </ul>


                    </div>

                @endforeach
                </div>
            @endforeach

        </div>

        @endif

    </div>





@endsection