<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
	<?php
	$docente=$_POST['id_docente'];
	$carrera=$_POST['id_carrera'];
	$materia=$_POST['id_materia'];	
	$grupo=$_POST['grupo'];
	$turno=$_POST['turno'];
	$inicio=$_POST['inicio'];
	$final=$_POST['final'];

	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql="INSERT INTO vincula(id_docente, id_carrera, id_materia, grupo, turno, inicio, final) VALUES ('$docente','$carrera','$materia','$grupo','$turno','$inicio','$final')";
	$result=mysql_query($sql);
	$cerrar=mysql_close($link);
	echo "Gracias. Hemos recibido sus datos. \n";

	?>
</body>

