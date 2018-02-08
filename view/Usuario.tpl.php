<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<title>App Calculadora | Usuários</title>
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/app.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/usuario.css">
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/bootstrap.min.js"></script>
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
			        <li class="active">
			        	<a href="<?php echo APP_URL?>usuarios/">Usuários<span style="font-size:18px;" class="pull-right hidden-xs showopacity fa fa-user"></span></a>
			        </li>
			        <li>
			        	<a href="<?php echo APP_URL?>relatorio/">Rel. de Operações<span style="font-size:18px;" class="pull-right hidden-xs showopacity fa fa-bar-chart"></span></a>
			        </li>
			         <li>
			        	<a href="<?php echo APP_URL?>sair/">Sair<span style="font-size:18px;" class="pull-right hidden-xs showopacity fa fa-power-off"></span></a>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>
			
			<div class="panel panel-default">
				<div class="panel-heading"><h3>Cadastro de Usuários</h3></div>
				<div class="panel-body">
					<div class="box-body table-responsive">
						<div class="text-right" style="margin-bottom: 10px">
							<button class="btn btn-primary">
								<i class="fa fa-plus"></i> Novo Usuário
							</button>
						</div>
						<table class="table table-hover table-bordered tableDados">
							<tr>
								<th width="75px">Código</th>
								<th>Nome</th>
								<th>Login</th>
								<th align="center" width="5%">Ações</th>
							</tr>
							<tr>
								<td rel="id_usuario" class="">5</td>
								<td rel="nome">Amanda</td>
								<td rel="login">amanda</td>
								<td align="center">
									<table>
										<tbody>
											<tr>
												<td align="center">
													<a class="editar" href="#"> <i class="fa fa-fw fa-edit" title="Editar"></i></a>
												</td>
												<td align="center">
													<a class="delete" href="#"> <i class="fa fa-fw fa-trash-o" title="Excluir"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</table>
					</div>
		 	 	</div>
			</div>
		</div>
	</body>
</html>