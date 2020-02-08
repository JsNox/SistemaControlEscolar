<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
	<?php
	$nombre=$_POST['nombre'];
	$carrera=$_POST['carrera'];
	$grupo=$_POST['grupo'];
	$turno=$_POST['turno'];
	$pass=$_POST['pass'];

	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql="INSERT INTO alumnos(nombre, id_carrera, grupo,turno,password) VALUES ('$nombre','$carrera','$grupo','$turno','$pass')";
	$result=mysql_query($sql);
	$cerrar=mysql_close($link);
	echo "Gracias. Hemos recibido sus datos. \n";

	?>
	<br>
	<a href="alta_alumno.html"><img src="atras.png" width="5%"></a>
</body>




</html>