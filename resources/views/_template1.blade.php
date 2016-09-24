<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Intranet</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenger Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 10]>
    <script type="text/javascript" src="{{ asset('assets/js/media.match.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/placeholder.min.js')}}"></script>
    <![endif]-->

    <link type="text/css" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/ajustes.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Core CSS with all styles -->

    <link type="text/css" href="{{asset('assets/plugins/jstree/dist/themes/avenger/style.min.css')}}" rel="stylesheet">    <!-- jsTree -->
    <link type="text/css" href="{{asset('assets/plugins/codeprettifier/prettify.css')}}" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="{{asset('assets/plugins/iCheck/skins/minimal/blue.css')}}" rel="stylesheet">              <!-- iCheck -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
    <link type="text/css" href="{{asset('assets/css/ie8.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/charts-flot/excanvas.min.js')}}"></script>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->

    <link type="text/css" href="{{asset('assets/plugins/form-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet"> 	<!-- DateRangePicker -->
    <link type="text/css" href="{{asset('assets/plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet"> 					<!-- FullCalendar -->
    <link type="text/css" href="{{asset('assets/plugins/charts-chartistjs/chartist.min.css')}}" rel="stylesheet">



    <!-- Chartist -->



</head>

<body class="infobar-offcanvas">

<div id="headerbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-brown">
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-pencil"></i></div>
                    </div>
                    <div class="tile-footer">
                        Adicionar Titulo
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-grape">
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-group"></i></div>
                        <div class="pull-right"><span class="badge">2</span></div>
                    </div>
                    <div class="tile-footer">
                        Adicionar Titulo
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-primary">
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                        <div class="pull-right"><span class="badge">10</span></div>
                    </div>
                    <div class="tile-footer">
                        Adicionar Titulo
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-inverse">
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-camera"></i></div>
                        <div class="pull-right"><span class="badge">3</span></div>
                    </div>
                    <div class="tile-footer">
                        Adicionar Titulo
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-midnightblue">
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-cog"></i></div>
                    </div>
                    <div class="tile-footer">
                        Adicionar Titulo
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-orange">
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-wrench"></i></div>
                    </div>
                    <div class="tile-footer">
                        Adicionar Titulo
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<header id="topnav" class="navbar navbar-midnightblue navbar-fixed-top clearfix" role="banner">

	<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
		<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar"><span class="icon-bg"><i class="fa fa-fw fa-bars"></i></span></a>
	</span>

	<span id="trigger-infobar" class="toolbar-trigger toolbar-icon-bg">
		<a data-toggle="tooltips" data-placement="left" title="Toggle Infobar"></a>
	</span>


    <div class="yamm navbar-left navbar-collapse collapse in">
        <ul class="nav navbar-nav">

            <li><a href="{{ route('admin.index') }}">Inicio</a></li>

            <li class="dropdown" id="widget-classicmenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Institucional<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">

                    <li><a href="escritorio.php">Sobre o Escritório</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="cases-de-sucesso.php">Cases de Sucesso</a></li>

                    @can('only-master')
                    <li><a href="{{ route('institucional.index') }}">Gerenciar Institucional</a></li>
                    @endcan

                </ul>
            </li>

            <li class="dropdown" id="widget-classicmenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pessoas<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">

                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="cases-de-sucesso.php">Cases de Sucesso</a></li>

                    @can('only-master')
                    <li><a href="{{ route('colaborador.index') }}">Gerenciar Organograma</a></li>
                    @endcan

                </ul>
            </li>

            @can('master-lider')
            <li class="dropdown" id="widget-classicmenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Gerenciar Intranet<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    @can('only-master')
                    <li><a href="{{ route('setor.index') }}">Setores</a></li>
                    <li><a href="{{ route('categoria.index') }}">Categorias</a></li>
                    <li><a href="{{ route('cargo.index') }}">Cargos</a></li>
                    <li><a href="{{ route('politicas.index') }}">Políticas</a></li>
                    @endcan

                    @can('master-lider')
                    <li><a href="{{ route('enquete.index') }}">Enquetes</a></li>
                    <li><a href="{{ route('categorianoticia.index') }}">Categoria de Noticias</a></li>
                    <li><a href="{{ route('noticia.index') }}">Noticia</a></li>
                    <li><a href="{{ route('artigo.index') }}">Artigos</a></li>
                    <li><a href="{{ route('vaga.index') }}">Vagas</a></li>
                    @endcan
                </ul>
            </li>
            @endcan

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Sistemas<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">RLANET</a></li>
                    <li><a href="#">Abertura de Chamados (TI)</a></li>

                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Políticas e Procedimentos</a>
            </li>

            <li class="dropdown" id="widget-classicmenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Modelos e Formulários<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Adicionar</a></li>
                    <li><a href="#">Adicionar</a></li>

                </ul>
            </li>



            @can('master-lider-user')


            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair ({{Auth::user()->name}})</a></li>
            @endcan

        </ul>

    </div>

    <ul class="nav navbar-nav toolbar pull-right">
        <li class="dropdown toolbar-icon-bg">
            <a href="#" id="navbar-links-toggle" data-toggle="collapse" data-target="header>.navbar-collapse">
				<span class="icon-bg">
					<i class="fa fa-fw fa-ellipsis-h"></i>
				</span>
            </a>
        </li>

        <li class="dropdown toolbar-icon-bg demo-search-hidden">
            <a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown"><span class="icon-bg"><i class="fa fa-fw fa-search"></i></span></a>

            <div class="dropdown-menu dropdown-alternate arrow search dropdown-menu-form">
                <div class="dd-header">
                    <span>Buscar Integrantes</span>
                    <span><a href="#"></a></span>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="">

					<span class="input-group-btn">

						<a class="btn btn-primary" href="#">Buscar</a>
					</span>
                </div>
            </div>
        </li>

        <li class="toolbar-icon-bg demo-headerdrop-hidden">
            <a href="#" id="headerbardropdown"><span class="icon-bg"><i class="fa fa-fw fa-level-down"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="fa fa-fw fa-arrows-alt"></i></span></i></a>
        </li>


    </ul>

</header>

<div id="wrapper">
    <div id="layout-static">
        <div class="static-sidebar-wrapper sidebar-midnightblue">
            <div class="static-sidebar">
                <div class="sidebar">
                    <div class="widget stay-on-collapse" id="widget-welcomebox">
                        <div class="widget-body welcome-box tabular">
                            <div class="tabular-row">
                                <div class="tabular-cell welcome-avatar">
                                    <a href="#"><img src="img/marcos.JPG" class="avatar"></a>
                                </div>
                                <div class="tabular-cell welcome-options">
                                    <span class="welcome-text">Bem Vindo,</span>
                                    <a href="#" class="name">Marcos Bertoleti</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget stay-on-collapse" id="widget-sidebar">
                        <nav role="navigation" class="widget-body">
                            <ul class="acc-menu">
                                <li class="nav-separator">Funcionalidades</li>
                                <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i><span>Início</span></a></li>
                                <!-- <li><a href="javascript:;"><i class="fa fa-user"></i><span>More Dashboard Pages</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="sales-force.html">Sales Force</a></li>
                                        <li><a href="sales-performance.html">Sales Performance</a></li>
                                        <li><a href="kpi-dashboard.html">KPI Dashboard</a></li>
                                        <li><a href="shipping-status.html">Shipping Status</a></li>
                                        <li><a href="metrics-dashboard.html">Metrics Dashboard</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="index.php"><i class="fa fa-columns"></i><span>Notificações</span><span class="badge badge-primary">8</span></a>

                                </li>

                                <!--<li><a href="javascript:;"><i class="fa fa-fw fa-wrench"></i><span>Configurações</span><span class="label label-info">UI</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="ui-modals.html">Adicionar</a></li>
                                        <li><a href="ui-progress.html">Adicionar</a></li>
                                        <li><a href="ui-paginations.html">Adicionar</a></li>
                                        <li><a href="ui-breadcrumbs.html">Adicionar</a></li>
                                        <li><a href="ui-labelsbadges.html">Adicionar</a></li>
                                        <li><a href="ui-alerts.html">Adicionar</a></li>
                                        <li><a href="ui-tabs.html">Adicionar</a></li>

                                        <li><a href="ui-carousel.html">Adicionar</a></li>
                                        <li><a href="ui-wells.html">Adicionar</a></li>
                                    </ul>
                                </li>-->

                                <li class="nav-separator">FERRAMENTAS</li>
                                <li><a href="javascript:;"><i class="fa fa-random"></i><span>Mapa da Plataforma</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="#">Adicionar</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contato.index') }}"><i class="fa fa-fw fa-envelope"></i><span>Minha Agenda</span></a></li>
                                <li><a href="{{ route('noticia.index') }}"><i class="fa fa-pencil-square-o"></i><span>Notícias</span></a></li>
                                <li><a href="{{ route('enqueteview.index') }}"><i class="fa fa-tasks"></i><span>Enquetes</span></a></li>
                                <li><a href="{{ route('colaborador.index') }}"><i class="fa fa-share-alt"></i><span>Organograma</span></a></li>

                                <li><a href="avisos-publicados.php"><i class="fa fa-info"></i><span>Avisos</span></a></li>


                                <li><a href="galeria.php"><i class="fa fa-table"></i><span>Galeria de Fotos</span></a></li>

                                <li class="nav-separator">APPS</li>
                                <li><a href="#"><i class="fa fa-inbox"></i><span>Chamados de TI</span><span class="badge badge-success">3</span></a></li>
                                <li><a href="#"><i class="fa fa-pencil"></i><span>Favoritos</span><span class="badge badge-info">7</span></a></li>
                                <li><a href="#"><i class="fa fa-check"></i><span>RLANET</span></a></li>

                                <li class="nav-separator"></li>



                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>



    <!-- Configurações de cores - lateral -->
    <div class="demo-options">
        <div class="demo-options-icon"><i class="fa fa-cog fa-spin"> </i></div>
        <div class="demo-heading"> Configurações do Layout</div>

        <div class="demo-body">
            <div class="tabular">
                <div class="tabular-row">
                    <div class="tabular-cell">Menu Superior Fixo</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="success" data-off-color="default" name="demo-fixedheader" data-on-text="I" data-off-text="O"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Layout | Background</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-boxedlayout" data-on-text="I" data-off-text="O"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Menu Lateral Compacto</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapseleftbar" data-on-text="I" data-off-text="O"></div>
                </div>


            </div>

        </div>

        <div class="demo-body">
            <div class="option-title">Cores do Topo</div>
            <ul id="demo-header-color" class="demo-color-list">
                <li><span class="demo-white"></span></li>
                <li><span class="demo-black"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-primary"></span></li>
                <li><span class="demo-info"></span></li>
                <li><span class="demo-alizarin"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-violet"></span></li>
                <li><span class="demo-indigo"></span></li>

            </ul>
        </div>

        <div class="demo-body">
            <div class="option-title">Cores do Menu Lateral</div>
            <ul id="demo-sidebar-color" class="demo-color-list">
                <li><span class="demo-white"></span></li>
                <li><span class="demo-black"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-primary"></span></li>
                <li><span class="demo-info"></span></li>
                <li><span class="demo-alizarin"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-violet"></span></li>
                <li><span class="demo-indigo"></span></li>
            </ul>
        </div>

        <div class="demo-body hide" id="demo-boxes">
            <div class="option-title">Background do Layout</div>
            <ul id="demo-boxed-bg" class="demo-color-list">
                <li><span class="pattern-brickwall"></span></li>
                <li><span class="pattern-dark-stripes"></span></li>
                <li><span class="pattern-rockywall"></span></li>
                <li><span class="pattern-subtle-carbon"></span></li>
                <li><span class="pattern-tweed"></span></li>
                <li><span class="pattern-vertical-cloth"></span></li>
                <li><span class="pattern-grey_wash_wall"></span></li>
                <li><span class="pattern-pw_maze_black"></span></li>
                <li><span class="patther-wild_oliva"></span></li>
                <li><span class="pattern-stressed_linen"></span></li>
                <li><span class="pattern-sos"></span></li>
            </ul>
        </div>

    </div>

    </div><!-- /Configurações de cores - lateral -->

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.10.2.min.js') }}"></script> 							<!-- Load jQuery -->
    <script type="text/javascript" src="{{ asset('assets/js/jqueryui-1.9.2.min.js') }}"></script> 							<!-- Load jQueryUI -->

    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 								<!-- Load Bootstrap -->


    <script type="text/javascript" src="{{ asset('assets/plugins/easypiechart/jquery.easypiechart.js') }}"></script> 		<!-- EasyPieChart-->
    <script type="text/javascript" src="{{ asset('assets/plugins/sparklines/jquery.sparklines.min.js') }}"></script>  		<!-- Sparkline -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jstree/dist/jstree.min.js') }}"></script>  				<!-- jsTree -->

    <script type="text/javascript" src="{{ asset('assets/plugins/codeprettifier/prettify.js') }}"></script> 				<!-- Code Prettifier  -->
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-switch/bootstrap-switch.js') }}"></script> 		<!-- Swith/Toggle Button -->

    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}"></script>  <!-- Bootstrap Tabdrop -->

    <script type="text/javascript" src="{{ asset('/plugins/iCheck/icheck.min.js') }}assets"></script>     					<!-- iCheck -->

    <script type="text/javascript" src="{{ asset('assets/js/enquire.min.js') }}"></script> 									<!-- Enquire for Responsiveness -->

    <script type="text/javascript" src="{{ asset('assets/plugins/bootbox/bootbox.js') }}"></script>							<!-- Bootbox -->

    <script type="text/javascript" src="{{ asset('assets/plugins/simpleWeather/jquery.simpleWeather.min.js') }}"></script> <!-- Weather plugin-->

    <script type="text/javascript" src="{{ asset('assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js') }}"></script> <!-- nano scroller -->

    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script> 	<!-- Mousewheel support needed for jScrollPane -->

    <script type="text/javascript" src="{{ asset('assets/js/application.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/demo/demo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/demo/demo-switcher.js') }}"></script>

    <!-- End loading site level scripts -->

    <!-- Load page level scripts-->

    <script type="text/javascript" src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>   				<!-- FullCalendar -->

    <script type="text/javascript" src="{{ asset('assets/plugins/wijets/wijets.js') }}"></script>     								<!-- Wijet -->

    <script type="text/javascript" src="{{ asset('assets/plugins/charts-chartistjs/chartist.min.js') }}"></script>               	<!-- Chartist -->
    <script type="text/javascript" src="{{ asset('assets/plugins/charts-chartistjs/chartist-plugin-tooltip.js') }}"></script>    	<!-- Chartist -->

    <script type="text/javascript" src="{{ asset('assets/plugins/form-daterangepicker/moment.min.js') }}"></script>              	<!-- Moment.js for Date Range Picker -->
    <script type="text/javascript" src="{{ asset('assets/plugins/form-daterangepicker/daterangepicker.js') }}"></script>     				<!-- Date Range Picker -->

    <script type="text/javascript" src="{{ asset('assets/demo/demo-index.js') }}"></script>

    <script type="text/javascript" src="assets/plugins/summernote/dist/summernote.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200
            });

            $('.airmode').summernote({
                airMode: true
            });
        });
    </script>



</body>
</html>