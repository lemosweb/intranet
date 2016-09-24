@extends('_template1')
@section('content')

    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">

                    <li><a href="{{ route('admin.index') }}">Home</a></li>
                    <li><a href="{{ route('contato.index') }}">Editar Contato</a></li>


                </ol>
                <div class="page-heading">
                    <h1>Editar Contato</h1>
                    <div class="options">

                    </div>
                </div>
                <div class="container-fluid">

                    <div class="col-md-6">
                        <ul class="demo-btns">

                            <li>
                                <a class="btn btn-lg btn-primary-alt btn-label" href="{{ route('contato.index') }}">
                                    <i class="fa  fa-users"></i>
                                    Todos os Contatos
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">

                                <div class="panel-body pb0">
                                    <p class="mb20">Cadastre mais contatos em sua agenda.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::model($contato,['route' => ['contato.update', $contato->id], 'method' => 'put']) !!}
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-user"></i>
                                                                        </span>
                                                        {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                    <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa  fa-user"></i>
                                                                            </span>
                                                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-phone-square"></i>
                                                                        </span>
                                                        {!! Form::text('telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                        <div class="col-md-6">



                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-phone"></i>
                                                                        </span>
                                                        {!! Form::text('nextel', null, ['class' => 'form-control', 'placeholder' => 'Nextel']) !!}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-suitcase"></i>
                                                                        </span>
                                                        {!! Form::text('empresa', null, ['class' => 'form-control', 'placeholder' => "Empresa ou Descrição"]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa   fa-pencil"></i>
                                                                        </span>
                                                        {!! Form::text('endereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div  class="row">
                                            <div id="ajustebtns" class="col-md-6">
                                                {!! Form::submit('Cadastrar Contato', ['class' => 'btn btn-primary']) !!}
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

        </div>



    </div> <!-- .container-fluid -->
    </div> <!-- #page-content -->
    </div>
    <footer role="contentinfo">
        <div class="clearfix">

            <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>
    </div>
    </div>



@endsection