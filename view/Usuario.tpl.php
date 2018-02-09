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
				<div class="panel-heading"><h4>Cadastro de Usuários</h4></div>
				<div class="panel-body">
					<div class="box-body table-responsive">
						<div class="text-right" style="margin-bottom: 10px">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro">
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
			<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="modal-title">Cadastrar Novo Usuário</h3>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="usu_nome" class="col-form-label">Nome:</label>
			            <input type="text" class="form-control" id="usu_nome">
			          </div>
			          <div class="form-group">
			            <label for="usu_login" class="col-form-label">Login:</label>
			            <input type="text" class="form-control" id="usu_login">
			          </div>
			          <div class="form-group">
			            <label for="usu_senha" class="col-form-label">Senha:</label>
			            <input type="password" class="form-control" id="usu_senha">
			          </div>
			          <div class="form-group">
			            <label for="usu_senha_2" class="col-form-label">Confirmação de Senha:</label>
			            <input type="password" class="form-control" id="usu_senha_2">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			        <button type="button" class="btn btn-primary">Cadastrar</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</body>
</html>