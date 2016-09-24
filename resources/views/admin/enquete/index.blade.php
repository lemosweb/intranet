@extends('_template1')

@section('content')

    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">

                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="cadastrar-noticia.php">Avisos Publicados</a></li>

                </ol>
                <div class="page-heading">
                    <h1>Avisos Publicados</h1>
                    <div class="options">

                    </div>

                </div>


                <div class="container-fluid">
                    <div class="col-md-12">
                        <a href="cadastrar-avisos.php"> <button id="btn-cadastrar-noticia" class="btn-success btn">Cadastrar Enquete</button></a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">


                            <div class="panel">
                                <div class="panel-body panel-no-padding">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Pergunta</th>
                                            <th>Cadastrado por</th>
                                            <th>Valida até</th>
                                            <th>Status</th>
                                            <th>Setor</th>
                                            <th>Observação</th>
                                            <th>Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($enquetes as $enquete)
                                            <tr>
                                                <td>{{ $enquete->pergunta }}</td>
                                                <td>{{ $enquete->user->name }}</td>
                                                <td>{{ $enquete->data_fim }}</td>
                                                <td>{{ ($enquete->status == 0 ? 'Inativo' : 'Ativo') }}</td>
                                                <td>{{ $enquete->setor->nome }}</td>
                                                <td>@if($enquete->respostas->isEmpty())<strong> ENQUETE SEM ALTERNATIVAS! </strong>
                                                    @elseif($enquete->respostas->count() < 2) <strong> cadastre  mais uma alternativa! </strong>
                                                    @endif
                                                </td>
                                                <td><a href="{{ route('enquete.edit', ['id' => $enquete->id ]) }}"class="btn btn-default btn-xs btn-label"><i class="fa fa-pencil"></i>Editar</a>

                                                    <a href="{{ route('respostas.index', ['id' => $enquete->id ]) }}" class="btn btn-success btn-xs btn-label"><i class="fa fa-search"></i>Respostas</a>
                                                </td>


                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                    {{ $enquetes->render() }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- .container-fluid -->


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
    </div>


@endsection