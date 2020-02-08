<?php
session_start();
error_reporting(0);
$var_sesion=$_SESSION['administrador'];
if ($var_sesion==null || $var_sesion=''){
   echo "Usted no esta autorizado";
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu del administrador</title>
	<link rel="stylesheet"  href="estilos.css">
	<link rel="stylesheet"  href="fonts.css">
	<link rel="shortcut Icon"  href="logocuh.ico">
	<link rel="stylesheet"  href="estilos.css">
<link rel="stylesheet"  href="fonts.css">
<link rel="stylesheet"  href="css/estilos.css">
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
							<li><a href="login_administrador.html">Administrador</a></li>
							<li><a href="login_alumno.html">Alumno</a></li>
							<li><a href="login_docente.html">Docente</a></li>
						
					</ul>
				</li>
				<li class="col s3"><a href="#"><span class="cuarto"><i class="icon icon-file-text2"></i></span>Acerca de</a></li>
				<li class="col s3"><a href="#"><span class="quinto"><i class="icon icon-envelop"></i></span>Contacto</a></li>
			</ul>
		</nav>
	</header>
	
	<center><h3>Seleccione la operación que requiere realizar</h3></center>
	<div class="contenedor-formulario">
		<div class="wrap">
		<div class="input-field">	
		<a href="alta_alumno.html">Dar de alta un alumno</a></div>
		<div class="input-field">	
		<a href="alta_docente.html">Dar de alta un docente</a></div>
		<div class="input-field">	
		<a href="alta_materias.html">Dar de alta una materia</a></div>
		<div class="input-field">	
		<a href="asigna_materia1.php">Asignacion de materias</a></div>
		<div class="input-field">	
		<a href="asigna_materia_gpo.php">Asignacion de materias por grupo</a></div>
		<a href="cerrar_sesion.php">Cerrar sesión</a></div>
	</div></div>
</body>
</html>