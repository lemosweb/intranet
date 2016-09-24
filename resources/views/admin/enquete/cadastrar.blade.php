@extends('_template1')
@section('content')
    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">

                    <li><a href="{{ route('enquete.index') }}">Enquetes</a></li>
                    <li class="{{ route('enquete.index') }}"><a href="cadastrar-noticia.php">Cadastrar Enquete</a></li>

                </ol>
                <div class="page-heading">
                    <h1>Cadastrar Enquetes</h1>
                    <div class="options">

                    </div>
                </div>
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">

                                <div class="panel-body pb0">
                                    <p class="mb20">Cadastre Enquetes.</p>
                                    <div class="row">
                                        <div class="col-md-12">
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
                                                <div  class="row">
                                                    <div id="bloco-campos-c-n" class="col-md-6">
                                                        {!! Form::label('setor', 'Setor: ') !!}
                                                        {!! Form::select('setor_id', $setores->lists('nome', 'id'), ['placeholder' => 'Selecione um setor'], ['class' => 'form-control']) !!}
                                                    </div>
                                            @endcan

                                                    <div id="bloco-campos-c-n" class="col-md-6">
                                                        {!! Form::label('data_fim', 'Enquete Válida Até: ') !!}
                                                        {!! Form::date('data_fim', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Data']) !!}
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="">

                                                    <div class="panel-body collapse in">

                                                        <div class="col-12">
                                                        {!! Form::label('pergunta', 'Pergunta: ') !!}
                                                        {!! Form::text('pergunta', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div  class="row">
                                                <div id="ajustebtns" class="col-md-6">
                                                    <div class="form-group">
                                                    {!! Form::submit('Cadastrar Enquete', ['class' => 'btn btn-primary', 'id' => 'ajsutemargen-btn']) !!}
                                                    </div>
                                                </div>
                                            </div>

                                            {!! Form::close() !!}
                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>

                    </div> <!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div>
            <footer role="contentinfo">
                <div class="clearfix">
                    <ul class="list-unstyled list-inline pull-left">

                    </ul>
                    <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
                </div>
            </footer>
        </div>
    </div>


@endsection