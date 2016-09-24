@extends('_template1')

@section('content')

    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">

                    <li><a href="{{ route('admin.index') }}">Home</a></li>
                    <li><a href="{{ route('contato.index') }}">Minha Agenda</a></li>


                </ol>
                <div class="page-heading">
                    <h1>Minha Agenda</h1>
                    <div class="options">

                    </div>
                </div>
                <div class="container-fluid">

                    <div class="col-md-6">
                        <ul class="demo-btns">
                            <li>
                                <a class="btn btn-lg btn-primary-alt btn-label" href="{{ route('contato.cadastrar') }}">
                                    <i class="fa  fa-user"></i>
                                    Novo Contato
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-lg btn-primary-alt btn-label" href="#">
                                    <i class="fa  fa-users"></i>
                                    Todos os Contatos
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <form action="#">
                            <div id="ajuste-busca-ad-contato" class="input-group well well-sm w100">
                                <input class="form-control input-lg" type="text" placeholder="Digite o nome, categoria ou empresa...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-lg" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                            </div>
                        </form>
                    </div>

                    @foreach($contatos as $contato)
                    <div class="col-md-3">

                        <div class="panel panel-profile">
                            <div class="panel-body">
                                <div class="user-card">
                                    <div class="avatar">
                                        <img class="img-responsive img-circle" src="img/agenda-icon.png">
                                    </div>
                                    <div class="contact-name">{{ $contato->nome }}</div>
                                    <div class="contact-status">{{ $contato->user->setor->nome }}</div>
                                    <ul class="details">
                                        <li>
                                            {{ $contato->email }}
                                        </li>
                                        <li><strong>Telefone: </strong>{{ $contato->telefone }}</li>
                                        <li><strong>Nextel: </strong>{{ $contato->nextel }}</li>
                                        <li>
                                            <p>{{ $contato->empresa }}</p>
                                        </li>
                                        <li>
                                            <a href="{{ route('contato.edit', ['id' => $contato->id ]) }}" class="btn btn-default">Editar</a>
                                            <a href="{{ route('contato.destroy', ['id' => $contato->id ]) }}" class="btn btn-default">Excluir</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-md-12">
                            {{ $contatos->render() }}
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