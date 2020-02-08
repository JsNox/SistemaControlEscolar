<?php
session_start();
error_reporting(0);
$var_sesion=$_SESSION['docente'];
if ($var_sesion==null || $var_sesion=''){
   echo "Usted no esta autorizado";
   die();
}
?>
<html>
<head>
		<link rel="stylesheet"  href="estilos.css">
<link rel="stylesheet"  href="fonts.css">
<link rel="stylesheet"  href="css/estilos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<title>Alta de calificaciones</title>
<meta charset='utf-8'/>
</head>
<body>
	<img src="cuh.jpg">
<header>		
		<nav>
			<ul>
				<li><a href="#"><span class="primero"><i class="material-icons">apps</i></span>Inicio</a></li>
				<li><a href="#"><span class="segundo"><i class="material-icons">person</i></span>Iniciar sesion</a>
					<ul>
							<li><a href="login_admin.html">Administrador</a></li>
							<li><a href="login_alumno.html">Alumno</a></li>
							<li><a href="login_docente.html">Docente</a></li>
						
					</ul>
				</li>
				<li><a href="#"><span class="tercero"><i class="material-icons">business_center</i></span>Servicios</a></li>
				<li><a href="#"><span class="cuarto"><i class="material-icons">group</i></span>¿Quienes somos?</a></li>
				<li><a href="#"><span class="quinto"><i class="material-icons">sms</i></span>Contacto</a></li>
			</ul>
		</nav></header>
	<center><h3>Alta de calificaciones</h3></center>
		<div class="contenedor-formulario">
		<div class="wrap">

<form action="guarda_calificaciones.php" method="POST" name ="formulario_registro" class="formulario">
	<div class="input-field">
<?php
	$carrera=$_POST['carrera'];
	$grupo=$_POST['grupo'];
	$turno=$_POST['turno'];
	$materia=$_POST['materia'];

	$link = mysql_connect("localhost", "root", "");
    mysql_select_db("escolar", $link);
    $sql="SELECT * FROM alumnos WHERE id_carrera=$carrera and grupo='$grupo' and turno='$turno'";
    $result=mysql_query($sql);
	echo "<form action='guarda_calificaciones.php' method='POST'>";
    echo "<table border = '1' align='center'> \n";
	echo "<tr><td align='center'><strong>Matrícula</strong></td><td align='center'><strong>Alumno</strong></td><td align='center'><strong>Calificación</strong></td></tr> \n"; 
	$i=0;
    while ($row = mysql_fetch_row($result)){ 
	$i=$i+1;
	//$id[$i]=$row[0];
	echo "<tr><td align='center'>$row[0]</td><td>$row[1]</td><td align='center'><input type='text' name='calif".$i."'/><input type='hidden' name='id".$i."' value='".$row[0]."'/></td></tr> \n"; 
	}
	echo "<input type='hidden' name='conta' value='$i'>";
	echo "<input type='hidden' name='carrera' value='$carrera'>";
	echo "<input type='hidden' name='materia' value='$materia'>";
	echo "<tr align='center'><td colspan=3><input type='submit' value='Enviar'></td></tr>";
	echo "</table> \n";
	echo "</form>";
    ?>
<!--<tr><td colspan=4 align="center"><input type=submit value="Enviar" name="enviar"/></td></tr>
</table>-->
</form>
</div>
</div>
<a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>