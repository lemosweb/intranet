@extends('_template1')

@section('content')


    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">

                <li><a href="index.php">Home</a></li>
                <li><a href="Organograma.php">Gerenciar Organograma</a></li>


            </ol>
            <div class="page-heading">
                <h1>@can('master-lider')Gerenciar @endcan Organograma</h1>
                <div class="options">

                </div>
            </div>
            <div class="container-fluid">

                <div class="col-md-6">
                    <ul class="demo-btns">
                        @can('master-lider')
                        <li>
                            <a class="btn btn-lg btn-primary-alt btn-label" href="{{ route('colaborador.cadastrar') }}">
                                <i class="fa  fa-user"></i>
                                Novo Colaborador
                            </a>
                        </li>
                        @endcan
                    </ul>
                </div>

                <div class="col-md-6">
                    <form action="#">
                        <div id="ajuste-busca-org" class="input-group well well-sm w100">
                            <input class="form-control input-lg" type="text" placeholder="Busca Rápida...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-lg" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">

                    <div id="lider-organograma" class="panel panel-profile">
                        <div class="panel-body">
                            <div class="user-card">
                                <div class="avatar">
                                    <img class="img-responsive img-circle" src="img/agenda-icon.png">
                                </div>
                                <div class="contact-name">Fernando de Oliveira</div>
                                <div class="contact-status"><a>CARGO - LIDER</a></div>
                                <ul class="details">

                                    <li>Ramal</li>
                                    <li>Id Nextel</li>
                                    <li>(41) 3535-3535</li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                @foreach($colaboradores as $colaborador)


                <div class="col-md-3">

                    <div class="panel panel-profile">
                        <div class="panel-body">
                            <div class="user-card">
                                <div class="avatar">
                                    <img class="img-responsive img-circle" src="img/agenda-icon.png">
                                </div>
                                <div class="contact-name">{{ $colaborador->name }}</div>
                                <div class="contact-status">{{ $colaborador->cargo->nome }} - {{ $colaborador->setor->nome }}</div>
                                <ul class="details">

                                    <li>
                                        {{  $tipo = ($colaborador->nivel_de_acesso == 2 ? 'Master' : ($colaborador->nivel_de_acesso == 1 ? 'Lider do Setor' :  'Usuário Padrão'))}} -
                                        {{ $status = ($colaborador->status == 1 ? 'Ativo' : 'Inativo') }}
                                    </li>

                                    @can('master-lider')
                                    <li>
                                        <a href="{{ route('colaborador.edit', ['id' => $colaborador->id ]) }}" class="btn btn-default">Editar</a>
                                        <a href="{{ route('colaborador.destroy', ['id' => $colaborador->id ]) }}" class="btn btn-default">Excluir</a>
                                    </li>
                                    @endcan



                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                @endforeach

                <div class="row">
                    <div class="col-md-12">
                        {{ $colaboradores->render() }}
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
    </div>


@endsection