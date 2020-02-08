<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
	<?php
	$nombre=$_POST['nombre'];
	$carrera=$_POST['carrera'];

	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql="INSERT INTO materias(materia,id_carrera) VALUES ('$nombre','$carrera')";
	$result=mysql_query($sql);
	$cerrar=mysql_close($link);
	echo "Gracias. Hemos recibido sus datos. \n";

	?>
</body>




</html>