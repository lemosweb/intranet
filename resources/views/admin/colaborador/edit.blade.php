@extends('_template1')
@section('content')

    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">

                    <li><a href="{{ route('admin.index') }}">Home</a></li>
                    <li><a href="{{ route('colaborador.cadastrar') }}">Cadastrar Organograma</a></li>


                </ol>
                <div class="page-heading">
                    <h1>Cadastrar Organograma</h1>
                    <div class="options">

                    </div>
                </div>
                <div class="container-fluid">

                    <div class="col-md-12">
                        <ul class="demo-btns">

                            <li>
                                <a class="btn btn-lg btn-primary-alt btn-label" href="{{ route('colaborador.index') }}">
                                    <i class="fa  fa-users"></i>
                                    Ver Todos
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">

                                <div class="panel-body pb0">
                                    <p class="mb20">Cadastre um Colaborador.</p>
                                                    {!! Form::model($colaborador,['route' => ['colaborador.update', $colaborador->id], 'method' => 'put']) !!}
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                    <div class="input-group">
                                                                        {!! Form::label('cargo_id', 'Cargo: ') !!}
                                                                        {!! Form::select('cargo_id', $cargos->lists('nome', 'id'),  ['placeholder' => 'Selecione um cargo'], ['class' => 'form-control']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @can('only-master')
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <div class="input-icon right">
                                                                        <div class="input-group">
                                                                            {!! Form::label('setor', 'Setor: ') !!}
                                                                            {!! Form::select('setor_id', $setores->lists('nome', 'id'), ['placeholder' => 'Selecione um setor'], ['class' => 'form-control']) !!}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                    <div class="input-group">
                                                                        {!! Form::label('nivel', 'Nivel de Acesso: ') !!}
                                                                        {!! Form::select('nivel_de_acessso', array('0' => 'Usuario Padrão', '1' => 'Líder do Setor', '2' => 'Master', '3' => 'Lider RH'), ['placeholder' => 'Selecione um setor'], ['class' => 'form-control']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endcan


                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-user"></i>
                                                                        </span>
                                                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-sitemap"></i>
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
                                                                            <i class="fa  fa-check-circle"></i>
                                                                        </span>
                                                                        {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                {!! Form::label('data_nascimento', 'Data de Nascimento: ') !!}
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-birthday-cake"></i>
                                                                        </span>

                                                                        {!! Form::date('data_nascimento', \Carbon\Carbon::now(), ['placeholder' => 'ramal']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-phone"></i>
                                                                        </span>
                                                                        {!! Form::text('telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-phone"></i>
                                                                        </span>
                                                                        {!! Form::text('ramal', null, ['class' => 'form-control', 'placeholder' => 'ramal']) !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <p>Status do Usuário:</p>

                                                                {!! Form::radio('status', 0, ['class' => 'field']) !!}
                                                                {!! Form::label('status', 'Intativo ') !!}

                                                                {!! Form::radio('status', 1, ['class' => 'field']) !!}
                                                                {!! Form::label('status', 'Ativo ') !!}


                                                            </div>



                                                        </div>


                                                        <div id="ajustebtns" class="col-md-6">

                                                            <button class="btn-primary btn">Atualizar Colaborador</button>
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