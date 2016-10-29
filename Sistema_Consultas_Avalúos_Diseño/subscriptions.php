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
	<link rel="stylesheet" href="css/guest.css">
	<link rel="stylesheet" href="css/subscription.css">
	<!-- Social Buttons CSS -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
</head>
<body>
	<!-- Header -->
	<header>
		<!-- Navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sitenavbar" aria-expanded="false">
						<span class="sr-only">Navegación</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">SCA</a>
				</div>
				<div class="collapse navbar-collapse" id="sitenavbar">
					<ul class="nav navbar-nav">
						<li><a href="#"><i class="fa fa-fw fa-home" aria-hidden="true"></i>Inicio</a></li>
						<li><a href="#"><i class="fa fa-fw fa-file-text" aria-hidden="true"></i>Acerca de nosotros</a></li>
						<li><a href="#"><i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i>Contacto</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown por si las moscas<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">link</a></li>
								<li><a href="#">link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">link</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-sign-in" aria-hidden="true"></i>Iniciar sesión <span class="caret"></span></a>
							<ul id="login-popup" class="dropdown-menu">
								<li>
									 <div class="row">
											<div class="col-lg-12">
												<p>Inicia sesión por redes sociales:</p>
												<div class="social-buttons" align="center">
													<a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>
													<a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
													<a class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a>
													<a class="btn btn-social-icon btn-linkedin"><span class="fa fa-linkedin"></span></a>
												</div>
												<br>
				                                <p>O con tu cuenta es SCA:</p>
												 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
														<div class="form-group">
															 <label class="sr-only" for="exampleInputEmail2">Email address</label>
															 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Correo electrónico" required>
														</div>
														<div class="form-group">
															 <label class="sr-only" for="exampleInputPassword2">Password</label>
															 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Contraseña" required>
				                                             <div class="help-block text-right"><a href="">¿Has olvidado tu contraseña?</a></div>
														</div>
														<div class="form-group">
															 <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
														</div>
														<div class="checkbox">
															 <label>
															 <input type="checkbox"> Mantenerme conectad@
															 </label>
														</div>
												 </form>
											</div>
											<div class="bottom text-center">
												<p>¿No tienes cuenta?</p><a href="signup.php"><b>Regístrate</b></a>
											</div>
									 </div>
								</li>
							</ul>
				        </li>
				    </ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- Main content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-header">
					<h1>Suscripción</h1>
				</div>
				<div>
					<p>Antes de poder utilizar el sistema como perito, deberás elegir uno de los siguientes planes, todos te ofrecen las mismas condiciones, sin embargo, el plazo de uso cambiara dependiendo de tu elección.</p>
				</div>
			</div>
		</div>
		<div class="row">
            <div class="col-md-3">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Básico</h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>9<sup>99</sup></span>
                        <span class="period">Un mes</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Adquirir</a>
                        </li>
                    </ul>
                </div>
            </div>
			<div class="col-md-3">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Medio</h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>39<sup>99</sup></span>
                        <span class="period">3 meses</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Adquirir</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pro <span class="label label-warning">Recomendado</span></h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>59<sup>99</sup></span>
                        <span class="period">6 meses</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Adquirir</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Anual <span class="label label-success">Mejor opción</span></h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>99<sup>99</sup></span>
                        <span class="period">Año completo</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Adquirir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>

	<!-- Footer -->
	<footer>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<p>Consultas y avalúos SCA© 2016</p>
					<p>7777-7777</p>
				</div>
				<div class="col-lg-3">
					<p>Nuestras redes sociales:</p>
					<a href="" class="fa fa-facebook-official fa-2x" aria-hidden="true"></a>
					<a href="" class="fa fa-twitter-square fa-2x" aria-hidden="true"></a>
					<a href="" class="fa fa-whatsapp fa-2x" aria-hidden="true"></a>
					<a href="" class="fa fa-envelope-o fa-2x" aria-hidden="true"></a>
				</div>
				<div class="col-lg-3">

				</div>
				<div class="col-lg-3">
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