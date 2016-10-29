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
	<link rel="stylesheet" href="css/profile.css">
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USUARIO<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="fa fa-fw fa-user" aria-hidden="true"></i>Perfil</a></li>
								<li><a href="#"><i class="fa fa-fw fa-list-alt" aria-hidden="true"></i>Configuración</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-fw fa-sign-out" aria-hidden="true"></i>Salir</a></li>
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
					<h1>Perfil de usuario</h1>
				</div>
				<div>
					<p>Tu información de usuario con tu cuenta registra en SCA.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">Información de usuario</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-3">
							<img id="userImage" src="img/profile/user/default.jpg" alt="user profile picture" class="img-responsive" align="center" width="250" height="350">
							<button id="btnModifyProfileImage" class="btn btn-primary center-block">Cambiar imagen</button>
						</div>
						<div class="col-lg-9">
							<table class="table">
								<tbody>
									<tr>
										<td class="col-lg-2 col-md-2 col-xs-2">Nombre:</td>
										<td class="col-lg-7 col-md-7 col-xs-7">NOMBRE</td>
									</tr>
									<tr>
										<td class="col-lg-2 col-md-2 col-xs-2">Correo electrónico:</td>
										<td class="col-lg-7 col-md-7 col-xs-7">CORREO</td>
									</tr>
									<tr>
										<td class="col-lg-2 col-md-2 col-xs-2">Teléfono:</td>
										<td class="col-lg-7 col-md-7 col-xs-7">TEL</td>
									</tr>
									<tr>
										<td class="col-lg-2 col-md-2 col-xs-2">Cédula:</td>
										<td class="col-lg-7 col-md-7 col-xs-7">CED</td>
									</tr>
									<tr>
										<td class="col-lg-2 col-md-2 col-xs-2">Nacionalidad:</td>
										<td class="col-lg-7 col-md-7 col-xs-7">NACIO</td>
									</tr>
									<tr>
										<td class="col-lg-2 col-md-2 col-xs-2">Dirección:</td>
										<td class="col-lg-7 col-md-7 col-xs-7">DIR</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<button id="btnModify" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modifyUserInformation">Modificar información</button>
					</div>
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
			<br>
		</div>
	</footer>

	<!-- Modal -->
    <div id="modifyUserInformation" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Información</h4><small>Modifica y completa tu información de usuario para un mejor manejo de tu información.</small>
                </div>
                <div class="modal-body">
                    <form class="form-modify-user">
                        <div class="input-group">
                            <label for="inputUsername" class="sr-only">Nombre</label>
                            <span class="input-group-addon" id="nameAddon"><i class="fa fa-fw fa-id-card-o" aria-hidden="true"></i></span>
                            <input type="text" id="inputUsername" class="form-control" placeholder="Nombre de usuario" required autofocus>
                        </div>
                        <br>
                        <div class="input-group">
                            <label for="inputLastname" class="sr-only">Apellidos</label>
                            <span class="input-group-addon" id="lastnameAddon"><i class="fa fa-fw fa-id-card-o" aria-hidden="true"></i></span>
                            <input type="text" id="inputLastname" class="form-control" placeholder="Apellidos" required autofocus>
                        </div>
                        <br>
                        <div class="input-group">
                            <label for="inputEmail" class="sr-only">Correo electrónico</label>
                            <span class="input-group-addon" id="emailAddon"><i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i></span>
                            <input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
                        </div>
                        <br>                  
                        <div class="input-group">
                            <label for="inputPhone" class="sr-only">Teléfono</label>
                            <span class="input-group-addon" id="phoneAddon"><i class="fa fa-fw fa-phone" aria-hidden="true"></i></span>
                            <input type="text" id="inputPhone" class="form-control" placeholder="Teléfono" required autofocus>
                        </div>
                        <br>                  
                        <div class="input-group">
                            <label for="inputNacionality" class="sr-only">Nacionalidad</label>
                            <span class="input-group-addon" id="nacionalityAddon"><i class="fa fa-fw fa-globe" aria-hidden="true"></i></span>
                            <select id="inputNacionality" class="selectpicker form-control">
                                <option value="CR">Costa Rica</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <label for="inputIDCard" class="sr-only">Cédula</label>
                            <span class="input-group-addon" id="idcardAddon"><i class="fa fa-fw fa-id-card" aria-hidden="true"></i></span>
                            <input type="text" id="inputIDCard" class="form-control" placeholder="Cédula" required autofocus>
                        </div>
                        <br>
                        <div class="input-group">
                            <label for="inputAddress" class="sr-only">Dirección</label>
                            <span class="input-group-addon" id="addressAddon"><i class="fa fa-fw fa-address-card-o" aria-hidden="true"></i></span>
                            <textarea id="inputAddress" class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

	<!-- JQuery -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>