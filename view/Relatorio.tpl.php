<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<title>App Calculadora | Relatório de Operações</title>
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/app.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/relatorio.css">
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/relatorio.js"></script>
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
			        <li>
			        	<a href="<?php echo APP_URL?>calculadora/">Calculadora<span style="font-size:18px;" class="pull-right hidden-xs showopacity fa fa-calculator"></span></a>
			        </li>
			        <li>
			        	<a href="<?php echo APP_URL?>usuarios/">Usuários<span style="font-size:18px;" class="pull-right hidden-xs showopacity fa fa-user"></span></a>
			        </li>
			        <li class="active">
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
				<div class="panel-heading"><h4>Relatório de Operações</h4></div>
				<div class="panel-body">
					
					<div class="box">
						<div style="padding: 5px">
							<div class="panel-body filtros well" style="margin-bottom:3px">
								<form id="form_filtro" class="form_filtro" method="post">
									<div class="col-sm-3">
										<label rel="data_ini">Data Inicial</label><br>
										<input class="form-control input-sm" name="data_ini" id="data_ini" value="<?php if(isset($_POST["data_ini"])) echo $_POST["data_ini"] ?>" type="date">
									</div>
									<div class="col-sm-3">
										<label rel="data_ini">Data Final</label><br>
										<input class="form-control input-sm" name="data_fim" id="data_fim" value="<?php if(isset($_POST["data_fim"])) echo $_POST["data_fim"] ?>" type="date">
									</div>
									<div class="col-sm-3">
										<label rel="data_ini">Responsável</label><br>
										<input class="form-control input-sm" name="usu_nome" id="usu_nome" value="<?php if(isset($_POST["usu_nome"])) echo $_POST["usu_nome"] ?>" type="text">
									</div>
									<div class="col-sm-3">
										<label>&nbsp;</label><br>
										<input name="acao" value="gerarRelatorio" type="hidden">
										<button class="btn btn-primary" id="btnGerarRelatorio" type="submit">Gerar Relatório</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="box-body table-responsive" style="margin-top: 10px;">
						<table class="table table-hover table-bordered tableDados">
							<tr>
								<th>Data</th>
								<th>Operação</th>
								<th>Responsavel</th>
							</tr>
							<?php foreach (Relatorio::listOperacoes() as $operacao) { ?>
								<tr>
									<td><?php echo $operacao["ope_data"]?></td>
									<td><?php echo $operacao["ope_calculo"]?></td>
									<td><?php echo $operacao["usu_nome"]?></td>
								</tr>
							<?php } ?>
						</table>
					</div>
		 	 	</div>
			</div>
		</div>
	</body>
</html>