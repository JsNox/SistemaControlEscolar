<?php
session_start();
error_reporting(0);
$var_sesion=$_SESSION['alumno'];
if ($var_sesion==null || $var_sesion=''){
   echo "Usted no esta autorizado";
   die();
}
?>
<html>
<head>
<title>Opciones de consulta</title>
<meta charset='utf-8'/>
<link rel="shortcut Icon"  href="logocuh.ico">
<link rel="stylesheet"  href="estilos.css">
<link rel="stylesheet"  href="fonts.css">
<link rel="stylesheet"  href="css/estilos.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
	<img src="cuh.jpg">
	<header>
		
		<nav>
			<ul class="row">
				<li class="col s3"><a href="#"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a></li>
				<li class="col s3"><a href="#"><span class="segundo"><i class="icon icon-price-tag"></i></span>Iniciar sesion</a>
					<ul>
							<li><a href="login_admin.html">Administrador</a></li>
							<li><a href="login_alumno.html">Alumno</a></li>
							<li><a href="login_docente.html">Docente</a></li>
						
					</ul>
				<li class="col s3"><a href="#"><span class="cuarto"><i class="icon icon-file-text2"></i></span>Acerca de</a></li>
				<li class="col s3"><a href="#"><span class="quinto"><i class="icon icon-envelop"></i></span>Contacto</a></li>
			</ul>
		</nav>
	</header>
	<center><h3>Opciones de consulta de calificaciones</h3></center>
	<div class="contenedor-formulario">
		<div class="wrap">
		<div class="input-field">
	<a href="consulta_calif.php">Por materia</a></div>
	<div class="input-field">
	<a href="consulta_historial.php">Todo tu historial académico</a></div>

<a href="cerrar_sesion.php">Cerrar sesión</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script>
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
   });
</body>
</html>