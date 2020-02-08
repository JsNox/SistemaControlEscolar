<html>
<head>
<meta charset="utf-8"/>
</head>
<body>


	


	<?php
	$nombre_contacto=$_POST['Nombre'];
	$email_contacto=$_POST['email'];
	$estado_contacto=$_POST['estado'];
	$ciudad_contacto=$_POST['ciudad'];
	$asunto_contacto=$_POST['asunto'];
	$mensaje_contacto=$_POST['mensaje'];

	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql="INSERT INTO contacto(nombre_contacto, email_contacto, estado_contacto,ciudad_contacto, asunto_contacto,mensaje_contacto) VALUES ('$nombre_contacto','$email_contacto','$estado_contacto','$ciudad_contacto','$asunto_contacto','$mensaje_contacto')";
	$result=mysql_query($sql);
	$cerrar=mysql_close($link);
	echo "Gracias. Hemos recibido sus datos. \n";

	?>


	<br>
	<a href="alta_alumno.html"><img src="atras.png" width="5%"></a>
</body>




</html>