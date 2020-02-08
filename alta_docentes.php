<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
	<?php
	$nombre=$_POST['nombre'];
	$pass=$_POST['pass'];
	
	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql="INSERT INTO docentes(nombre, pass) VALUES ('$nombre','$pass')";
	$result=mysql_query($sql);
	$cerrar=mysql_close($link);
	echo "Gracias. Hemos recibido sus datos. \n";

	?>
</body>




</html>