
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cadastrar Enquete</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenger Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->

    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet"> 
    <link type="text/css" href="assets/css/ajustes.css" rel="stylesheet"> <!-- Core CSS with all styles -->

    <link type="text/css" href="assets/plugins/jstree/dist/themes/avenger/style.min.css" rel="stylesheet">    <!-- jsTree -->
    <link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link type="text/css" href="assets/css/ie8.css" rel="stylesheet">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link type="text/css" href="assets/plugins/summernote/dist/summernote.css" rel="stylesheet"> <!-- Summernote -->

    </head>

   <body class="infobar-offcanvas">
        
       <?php include './include-menu-topo.php';?>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-midnightblue">
                    <div class="static-sidebar">
                       <?php include './include-menu-lateral.php';?>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
                                <li><a href="enquetes.php">Enquete</a></li>
                                <li class="active"><a href="cadastrar-enquete.php">Cadastrar Enquete</a></li>

                            </ol>
                            <div class="page-heading">            
                                <h1>Cadastrar Enquete</h1>
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
                                                        <form>
                                                            <div class="form-group">
                                                                <div  class="row">
                                                                    <div id="bloco-campos-c-n" class="col-md-6">
                                                                        <input class="form-control" type="text" placeholder="Título">
                                                                    </div>
                                                                    <div id="bloco-campos-c-n" class="col-md-6">
                                                                        <input class="form-control" type="date" placeholder="Data">
                                                                    </div>


                                                                    <div id="bloco-campos-c-n" class="col-md-6">
                                                                        <select id="" class="form-control" name="">
                                                                            <option>Categoria do Artigo</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                        </select>
                                                                    </div>
                                                                    <div id="bloco-campos-c-n" class="col-md-6">
                                                                        <select id="" class="form-control" name="">
                                                                            <option>Selecione um Setor</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                
                                                                    <div class="">
                                                                        
                                                                        <div class="panel-body collapse in">

                                                                            <div class="col-12">
                                                                                <div class="summernote">
                                                                                    <h3>Default Editor</h3>
                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, nobis laboriosam repellat ipsum deserunt voluptate eos praesentium atque eligendi libero. Nam, id, eligendi natus facilis ullam pariatur numquam amet illum repudiandae ex porro labore in perferendis vero nobis iure ratione? Repudiandae, vel, quo, dolores velit vero debitis sed non odio culpa quasi excepturi tempore saepe atque quod repellendus aliquam eum neque dolorem beatae veniam quis id deserunt dignissimos voluptatum incidunt necessitatibus inventore reprehenderit consequatur esse perferendis ipsum earum pariatur et eaque sequi a harum sit similique itaque dicta expedita unde. Animi, quo, facilis laudantium quas commodi aut harum reprehenderit explicabo.</p>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                               
                                                            
                                                            <div  class="row">
                                                                <div id="ajustebtns" class="col-md-6">
                                                                    <button id="ajsutemargen-btn" class="btn-default btn">Cancelar</button>
                                                                    <button class="btn-default btn">Salvar Rascunho</button>
                                                                    <button class="btn-primary btn">Cadastrar Notícia</button>
                                                                </div>
                                                            </div>


                                                        </form>
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
        </div>


    
    <!-- Configurações de cores - lateral -->
     <?php include './include-config-cores.php';?>
    <!-- /Configurações de cores - lateral -->
    
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="assets/js/jqueryui-1.9.2.min.js"></script> 							<!-- Load jQueryUI -->

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->


<script type="text/javascript" src="assets/plugins/easypiechart/jquery.easypiechart.js"></script> 		<!-- EasyPieChart-->
<script type="text/javascript" src="assets/plugins/sparklines/jquery.sparklines.min.js"></script>  		<!-- Sparkline -->
<script type="text/javascript" src="assets/plugins/jstree/dist/jstree.min.js"></script>  				<!-- jsTree -->

<script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script type="text/javascript" src="assets/js/enquire.min.js"></script> 									<!-- Enquire for Responsiveness -->

<script type="text/javascript" src="assets/plugins/bootbox/bootbox.js"></script>							<!-- Bootbox -->

<script type="text/javascript" src="assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin-->

<script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script type="text/javascript" src="assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> 	<!-- Mousewheel support needed for jScrollPane -->

<script type="text/javascript" src="assets/js/application.js"></script>
<script type="text/javascript" src="assets/demo/demo.js"></script>
<script type="text/javascript" src="assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<script type="text/javascript" src="assets/plugins/summernote/dist/summernote.js"></script>  	<!-- Summernote -->

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

    <!-- End loading page level scripts-->

    </body>
</html>