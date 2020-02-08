<?php
	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	?>
<html>
<head>
<title>Asignación de materias por grupos</title>
<meta charset="utf-8"/>
<link rel="shortcut Icon"  href="logocuh.ico">
<link rel="stylesheet"  href="estilos.css">
<link rel="stylesheet"  href="fonts.css">
<link rel="stylesheet"  href="css/estilos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
	<img src="cuh.jpg">
<header>		
		<nav>
			<ul class="row">
				<li class="col s3"><a href="inicio.html"><span class="primero"><i class="material-icons">apps</i></span>Inicio</a></li>
				<li class="col s3"><a href="#"><span class="segundo"><i class="material-icons">person</i></span>Iniciar sesion</a>
					<ul>
							<li><a href="login_admin.html">Administrador</a></li>
							<li><a href="login_alumno.html">Alumno</a></li>
							<li><a href="login_docente.html">Docente</a></li>
						
					</ul>
				</li>
				<li class="col s3"><a href="somos.html"><span class="cuarto"><i class="material-icons">group</i></span>¿Quienes somos?</a></li>
				<li class="col s3"><a href="contacto.html"><span class="quinto"><i class="material-icons">sms</i></span>Contacto</a></li>
			</ul>
		</nav></header>		
	<center><h1>Asignacion de materias por grupo</h1></center>
	<div class="contenedor-formulario">
		<div class="wrap">
	<form action="asig_mat_gpo.php" method="POST"  name ="formulario_registro" class="formulario">
			<div class="input-field">
					<select name="carrera">
					<option disabled selected>Carrera</option>
					<option value="1">Sistemas</option>
					<option value="2">Derecho</option>
					<option value="3">Contaduría</option>
					<option value="4">Psicología</option>
					<option value="5">Educación</option>
					<option value="6">Administración y sistemas</option>
					
					</select>
				</div>
				
				 <div class="input-field">
					<select name="id_docente">
					<option selected>docente</option>
					<?php
					$sql2="SELECT * FROM docentes";
					$result2=mysql_query($sql2);
					while ($row2=mysql_fetch_array($result2)){
						echo "<option value='".$row2['id_docente']."'>";
						echo $row2['nombre'];
					}
					?>
				</select>
			</div>

			<div class="input-field">
			<label for="grupo">Grupo</label>
			<input type="text" name="grupo">
			</div>
				 <div class="input-field">
					<select name="id_materia">
					<option selected>Materia</option>
					<?php
					$sql1="SELECT * FROM materias";
					$result1=mysql_query($sql1);
					while ($row1=mysql_fetch_array($result1)){
						echo "<option value='".$row1['id_materia']."'>";
						echo $row1['materia'];
					}
					?>
				</select>
			</div>
				<div class="input-field">
					<select name="turno">
					<option  disabled selected>Turno</option>
					<option value="Matutino">Matutino</option>
					<option value="Vespertino">Vespertino</option>
					<option value="Mixto">Mixto</option>
				</select>
					</div>
					<div class="input-field">
						<label for="inicio">Inicio</label>
					<input type="date" name="inicio"></td>
				</div>
				<div class="input-field">
					<label for="final">Final</label>
				<input type="date" name="final"></td>
			</div>
			<input type="submit" value="Enviar">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
					<a href="menu.php"><img src="atras.png" width="5%"></a></div>
	</form>
		<script>
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
   });
</script> 
</body>
</html>
