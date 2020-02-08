<!DOCTYPE html>
<html>
<head>
	<title>ASIGNACION DE MATERIAS POR GRUPO</title>
</head>
<body>
<?php

$carrera=$_POST['carrera'];
$materia=$_POST['id_materia'];
$grupo=$_POST['grupo'];
$turno=$_POST['turno'];
$inicio=$_POST['inicio'];
$final=$_POST['final'];
$id_docente=$_POST['id_docente'];

	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql ="INSERT INTO vinc_alumno( id_materia, grupo, turno, inicio, final,id_carrera,id_docente) VALUES ('$materia','$grupo','$turno', '$inicio' ,'$final','$carrera','$id_docente')";
	$result = mysql_query($sql);
	$cerrar= mysql_close($link);
	echo "Gracias. Hemos recibido sus datos.";
?>
	
</body>
</html>