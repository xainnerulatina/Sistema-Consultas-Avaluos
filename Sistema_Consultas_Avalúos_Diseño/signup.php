<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>TITULO - PAG</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/signup.css">
	<!-- Social Buttons CSS -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
</head>
<body>
	<!-- Main content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form class="form-signin">
			        <h2 class="form-signin-heading">Registrarse</h2>
			        <ul class="nav nav-tabs">
			        	<li class="active"><a data-toggle="tab" href="#tabSignup">Cuenta SCA</a></li>
			        	<li><a data-toggle="tab" href="#tabSocialSignup">Redes sociales</a></li>
			        </ul>
			        <div class="tab-content">
			        	<div id="tabSignup" class="tab-pane fade in active">
			        		<br>
			        		<div class="input-group">
					        	<label for="inputUsername" class="sr-only">Nombre de usuario</label>
								<span class="input-group-addon" id="nameAddon"><i class="fa fa-fw fa-user" aria-hidden="true"></i></span>
					        	<input type="text" id="inputUsername" class="form-control" placeholder="Nombre de usuario" required autofocus>
					        </div>

			        		<div class="input-group">
					        	<label for="inputLastname" class="sr-only">Apellidos</label>
								<span class="input-group-addon" id="lastnameAddon"><i class="fa fa-fw fa-user" aria-hidden="true"></i></span>
					        	<input type="text" id="inputLastname" class="form-control" placeholder="Nombre de usuario" required autofocus>
					        </div>

							<div class="input-group">
					        	<label for="inputEmail" class="sr-only">Correo electrónico</label>
								<span class="input-group-addon" id="emailAddon"><i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i></span>
					        	<input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
					        </div>

							<div class="input-group">
					        	<label for="inputPassword" class="sr-only">Contraseña</label>
								<span class="input-group-addon" id="passwordAddon"><i class="fa fa-fw fa-key" aria-hidden="true"></i></span>
					        	<input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
					        </div>

							<div class="input-group">
					        	<label for="inputValidatePassword" class="sr-only">Repite tu contraseña </label>
								<span class="input-group-addon" id="validatePasswordAddon"><i class="fa fa-fw fa-key" aria-hidden="true"></i></span>
					        	<input type="password" id="inputValidatePassword" class="form-control" placeholder="Repite tu contraseña " required autofocus>
					        </div>

							<div class="input-group">
					        	<label for="inputPhone" class="sr-only">Teléfono</label>
								<span class="input-group-addon" id="phoneAddon"><i class="fa fa-fw fa-phone" aria-hidden="true"></i></span>
					        	<input type="text" id="inputPhone" class="form-control" placeholder="Teléfono" required autofocus>
					        </div>

							<div class="input-group">
					        	<label for="inputIDCard" class="sr-only">Cédula</label>
								<span class="input-group-addon" id="idcardAddon"><i class="fa fa-fw fa-credit-card-alt" aria-hidden="true"></i></span>
					        	<input type="text" id="inputIDCard" class="form-control" placeholder="Cédula" required autofocus>
					        </div>
					        <br>
					        <a class="btn btn-primary btn-block" href="profile.php">Registrarme</a>
			        	</div>
			        	<div id="tabSocialSignup" class="tab-pane fade">
			        		<br>
			        		<div class="social-buttons" align="center">
			        			<a class="btn btn-block btn-social btn-twitter"><span class="fa fa-twitter"></span> Registrarte con Twitter</a>
			        			<a class="btn btn-block btn-social btn-facebook"><span class="fa fa-facebook"></span> Registrarte con Facebook</a>
			        			<a class="btn btn-block btn-social btn-google"><span class="fa fa-google"></span> Registrarte con Google</a>
			        			<a class="btn btn-block btn-social btn-linkedin"><span class="fa fa-linkedin"></span> Registrarte con LinkedIn</a>
							</div>
			        	</div>
			        </div>
			        <br>
			        <a href="index.php" class="btn btn-default btn-block">Volver</a>
			    </form>
			</div>
		</div>
	</div>


	<!-- Footer -->
	<footer>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-lg-12" align="center">
					<p>Consultas y avalúos SCA© 2016</p>
					<p>7777-7777</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- JQuery -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>