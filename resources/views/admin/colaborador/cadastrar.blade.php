@extends('_template1')

@section('content')

    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">

                    <li><a href="{{ route('admin.index') }}">Home</a></li>
                    <li><a href="{{ route('colaborador.cadastrar') }}">Cadastrar Colaborador</a></li>


                </ol>
                <div class="page-heading">
                    <h1>Cadastrar Colaborador</h1>
                    <div class="options">

                    </div>
                </div>
                <div class="container-fluid">

                    <div class="col-md-6">
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
                                    <p class="mb20">Dados Cadastrais</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => 'colaborador.store']) !!}


                                            <div class="form-group">
                                                {!! Form::label('cargo', 'Cargo: ') !!}
                                                {!! Form::select('cargo_id', $cargos->lists('nome', 'id')) !!}
                                            </div>

                                            <div class="form-group">

                                                {!! Form::label('setor', 'Setor: ') !!}
                                                {!! Form::select('setor_id', $setores->lists('nome','id')) !!}

                                                {!! Form::label('nivel', 'Nivel de Acesso: ') !!}
                                                {!! Form::select('nivel_de_acesso', array('0' => 'Usuario Padrão', '1' => 'Líder do Setor', '2' => 'Master')) !!}
                                             </div>




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
                                                                            <i class="fa  fa-envelope-square"></i>
                                                                        </span>
                                                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'e-mail']) !!}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa  fa-square"></i>
                                                                        </span>
                                                        {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'password']) !!}
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
                                                                            <i class="fa  fa-sitemap"></i>
                                                                        </span>
                                                            {!! Form::text('ramal', null, ['class' => 'form-control', 'placeholder' => 'Ramal']) !!}
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <p>Status do Usuário:</p>
                                                    {!! Form::radio('status', 1, ['class' => 'field']) !!}
                                                    {!! Form::label('status', 'Ativo ') !!}

                                                    {!! Form::radio('status', 0, ['class' => 'field']) !!}
                                                    {!! Form::label('status', 'Intativo ') !!}
                                                </div>

                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-fw fa-info-circle tooltips"></i>
                                                    <div class="input-group">

                                                                        <span class="input-group-addon">
                                                                             {!! Form::label('data_nascimento', 'Data de Nascimento: ') !!}
                                                                            <i class="fa  fa-calendar-o"></i>
                                                                        </span>
                                                        {!! Form::date('data_nascimento', \Carbon\Carbon::now()) !!}
                                                    </div>
                                                </div>
                                            </div>



                                            <div id="ajustebtns" class="col-md-8 ">
                                                <button type="reset" value="Reset" class="btn-default btn">Cancelar</button>
                                                {!! Form::submit('Cadastrar Colaborador', ['class' => 'btn btn-primary']) !!}
                                            </div>





                                        </div>






                                        </div>






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
