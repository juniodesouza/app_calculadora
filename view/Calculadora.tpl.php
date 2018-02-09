<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<title>App Calculadora | Calculadora</title>
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/app.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/calculadora.css">
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/calculadora.js"></script>
	</head>
	<body>
		<div class="container">
			<br>
			<nav class="navbar navbar-default sidebar" role="navigation">
			    <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>      
			    </div>
			    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active">
			        	<a href="<?php echo APP_URL?>calculadora/">Calculadora<span style="font-size:18px;" class="pull-right hidden-xs showopacity fa fa-calculator"></span></a>
			        </li>
			        <li>
			        	<a href="<?php echo APP_URL?>usuarios/">Usuários<span style="font-size:18px;" class="pull-right hidden-xs showopacity fa fa-user"></span></a>
			        </li>
			        <li>
			        	<a href="<?php echo APP_URL?>relatorio/">Relatório de Operações<span style="font-size:18px;" class="pull-right hidden-xs showopacity fa fa-bar-chart"></span></a>
			        </li>
			         <li>
			        	<a href="<?php echo APP_URL?>sair/">Sair<span style="font-size:18px;" class="pull-right hidden-xs showopacity fa fa-power-off"></span></a>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>
			
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Calculadora</h4></div>
				<div class="panel-body">
					<div class="col-md-3"></div>
					<div class="col-md-6">
					
						<div class="panel panel-default calculadora">
							<div class="panel-body">
								<div class="col-xs-12">
									<input type="text" class="form-control input-lg" id="visor">
								</div>
								<div id="teclado">
							
									<div class="col-xs-3"> <button data-key="40" class="btn btn-primary ">(</button> </div>
									<div class="col-xs-3"> <button data-key="41" class="btn btn-primary ">)</button> </div>
									<div class="col-xs-3"> <button data-key="00" class="btn btn-primary ">√</button> </div>
									<div class="col-xs-3"> <button data-key="27" class="btn btn-primary">CE</button> </div>
								
									<div class="col-xs-3"> <button data-key="55" class="btn btn-primary ">7</button> </div>
									<div class="col-xs-3"> <button data-key="56" class="btn btn-primary ">8</button> </div>
									<div class="col-xs-3"> <button data-key="57" class="btn btn-primary ">9</button> </div>
									<div class="col-xs-3"> <button data-key="47" class="btn btn-primary ">÷</button> </div>
									
									<div class="col-xs-3"> <button data-key="52" class="btn btn-primary ">4</button> </div>
									<div class="col-xs-3"> <button data-key="53" class="btn btn-primary ">5</button> </div>
									<div class="col-xs-3"> <button data-key="54" class="btn btn-primary ">6</button> </div>
									<div class="col-xs-3"> <button data-key="42" class="btn btn-primary ">x</button> </div>
									
									<div class="col-xs-3"> <button data-key="49" class="btn btn-primary ">1</button> </div>
									<div class="col-xs-3"> <button data-key="50" class="btn btn-primary ">2</button> </div>
									<div class="col-xs-3"> <button data-key="51" class="btn btn-primary ">3</button> </div>
									<div class="col-xs-3"> <button data-key="45" class="btn btn-primary ">-</button> </div>
									
									<div class="col-xs-3"> <button data-key="48" class="btn btn-primary ">0</button> </div>
									<div class="col-xs-3"> <button data-key="188" class="btn btn-primary ">,</button> </div>
									<div class="col-xs-3"> <button data-key="37" class="btn btn-primary ">%</button> </div>
									<div class="col-xs-3"> <button data-key="43" class="btn btn-primary ">+</button> </div>
									
									<div class="col-xs-12"> <button data-key="61" class="btn btn-primary ">=</button> </div>
									
								</div>
							</div>
						</div>
							
					</div>
					<div class="col-md-3"></div>
		 	 	</div>
			</div>
		</div>
	</body>
</html>