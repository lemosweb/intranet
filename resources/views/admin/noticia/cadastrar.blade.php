@extends('_template1')
@section('content')

    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">

                    <li><a href="{{ route('noticia.index') }}">Notícias</a></li>
                    <li class=""><a href="{{ route('noticia.index') }}">Cadastrar Notícia</a></li>

                </ol>
                <div class="page-heading">
                    <h1>Cadastrar Notícia</h1>
                    <div class="options">

                    </div>
                </div>
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">

                                <div class="panel-body pb0">
                                    <p class="mb20">Cadastre Notícias.</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {!! Form::open(['route' => 'noticia.store']) !!}
                                                <div class="form-group">
                                                    <div  class="row">
                                                        <div id="bloco-campos-c-n" class="col-md-6">
                                                            {!! Form::label('setor', 'Setor: ') !!}
                                                            {!! Form::select('setor_id', $setores->lists('nome', 'id'), ['placeholder' => 'Selecione um setor'], ['class' => 'form-control']) !!}
                                                        </div>

                                                        <div id="bloco-campos-c-n" class="col-md-6">
                                                            {!! Form::label('categoria', 'Categoria: ') !!}
                                                            {!! Form::select('categoria_id', $categorias->lists('nome', 'id'), ['placeholder' => 'Selecione um setor'], ['class' => 'form-control']) !!}
                                                        </div>

                                                        <div id="bloco-campos-c-n" class="col-md-6">
                                                            {!! Form::label('titulo', 'Titulo: ') !!}
                                                            {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Digite um Titulo']) !!}
                                                        </div>

                                                        <div id="bloco-campos-c-n" class="col-md-6">
                                                            {!! Form::label('validade', 'Artigo válido até: ') !!}
                                                            {!! Form::date('validade', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Data']) !!}
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="">

                                                        <div class="panel-body collapse in">

                                                            <div class="col-12">
                                                                <div class="summernote">
                                                                    {!! Form::label('texto', 'Texto: ') !!}
                                                                    {{ Form::textarea('texto', null, ['class' => 'form-control']) }}
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div  class="row">
                                                        <div id="ajustebtns" class="col-md-6">
                                                            <div class="form-group">
                                                                {!! Form::submit('Cadastrar Artigo', ['class' => 'btn-primary btn', 'id' => 'ajsutemargen-btn']) !!}
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



    <!-- Initialize scripts for this page-->

    <!-- End loading page level scripts-->

@endsection