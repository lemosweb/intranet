@extends('_template1')

@section('content')

    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">

                    <li><a href="{{ route('admin.index') }}">Home</a></li>
                    <li><a href="{{ route('enqueteview.index') }}">Enquetes</a></li>


                </ol>
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


                <div class="page-heading">
                    <h1>Enquetes</h1>
                    <div class="options">

                    </div>
                </div>
                <div class="container-fluid">




                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">

                                <div class="panel-body pb0">
                                    <div id="ajusbtn-usuario" class="col-md-12">
                                        @can('master-lider')
                                        <a href="{{ route('enquete.cadastrar') }}"><button class="btn btn-success">Nova Enquete</button></a>
                                        <button class="btn btn-default-alt">Relatórios (desativado)</button>
                                        @endcan

                                    </div>
                                    <div class="row">


                                        <div id="ajuste-cor-borda" class="col-sm-6">
                                            <div class="panel-body">

                                                <div class="row">
                                                    <div class="texto-enquete-aberta">
                                                        <h3>{{ $enqueteAdmin->pergunta }}</h3>

                                                    </div>
                                                </div>
                                                {!! Form::open(['route' => 'enqueteview.store']) !!}
                                                <ul class="list-unstyled mb0">
                                                    @foreach($enqueteAdmin->respostas as $resposta)
                                                    <li class="box-select-enquete">
                                                        <label>
                                                            <div class="checkbox-inline icheck">
                                                                <div class="icheckbox_minimal-blue" style="position: relative;">
                                                                        {!! Form::radio('resposta', $resposta->id, false) !!}
                                                                    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                                                                </div>
                                                            </div>
                                                            {!! $resposta->resposta !!}
                                                        </label>

                                                    </li>
                                                    @endforeach

                                                    <div class="ajustebtn-enquete">
                                                        {!! Form::submit('Confirmar', ['class' => 'btn-primary btn fa fa-check']) !!}

                                                    </div>
                                                </ul>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>

                                        <div id="ajuste-cor-resultado" class="col-sm-5">
                                            @foreach($enquetes as $enquete)
                                            <div class="panel-body">

                                                <div class="row">
                                                    <div class="texto-enquete-resultado">
                                                        <h3>{{ $enqueteAdmin->pergunta }}</h3>

                                                    </div>
                                                </div>
                                                @foreach($enquete->respostas as $resposta)

                                                <h3>{!! $resposta->resposta !!}  - <strong> {{ $resposta->qtd_respostas }} votos</strong></h3>

                                                @endforeach

                                            </div>
                                            @endforeach
                                        </div>



                                    </div>
                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
            </div>



        </div> <!-- .container-fluid -->
    </div> <!-- #page-content -->
    </div></div>
    <footer role="contentinfo">
        <div class="clearfix">

            <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>
    </div>
    </div>








@endsection