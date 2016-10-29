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

		<!-- Guest Carousel -->
		<div id="guestCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
		  	<ol class="carousel-indicators">
			    <li data-target="#guestCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#guestCarousel" data-slide-to="1"></li>
			    <li data-target="#guestCarousel" data-slide-to="2"></li>
			    <li data-target="#guestCarousel" data-slide-to="3"></li>
		  	</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
			    	<img src="http://placehold.it/1600x450&text=Slide One" alt="Chania">
			    </div>
			    <div class="item">
				    <img src="http://placehold.it/1600x450&text=Slide Two" alt="Chania">
			    </div>
			    <div class="item">
		 		    <img src="http://placehold.it/1600x450&text=Slide Three" alt="Flower">
			    </div>
			    <div class="item">
					<img src="http://placehold.it/1600x450&text=Slide Four" alt="Flower">
			    </div>
			</div>

		  <!-- Left and right controls -->
		  	<a class="left carousel-control" href="#guestCarousel" role="button" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#guestCarousel" role="button" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		</div>
	</header>

	<!-- Main content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-header">
					<h1>Consultas y avalúos <small>¡Bienvenido!</small></h1>
				</div>
				<div>
					<p>Bienvenido al sitio de consultas y avalúos, especial para blablablá…</p>
					<p>Aquí va info para nuevos visitantes y la vara</p>
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