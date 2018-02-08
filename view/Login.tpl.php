<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<title>App Calculadora | Login</title>
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo APP_URL?>view/css/login.css">
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo APP_URL?>view/javascript/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="center-block">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Identifique-se</h3>
					</div>
					<div class="panel-body">
						<form method="post" role="form" id="login-form">
							<fieldset>
								<div class="form-group">
									<label for="login">Usuário</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Usuário" name="login" id="login" type="text" autocomplete="off" autofocus>
									</div>
								</div>
								<div class="form-group">
									<label for="input-username">Senha</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input class="form-control" placeholder="Senha" name="senha" type="password" autocomplete="off" value="">
									</div>
								</div>
								<br>
								<input type="submit" name="enter" value="Entrar" class="btn btn-lg btn-primary btn-block" id="login-button" />                
								<input type="hidden" name="acao" id="acao" value="logar"/>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>