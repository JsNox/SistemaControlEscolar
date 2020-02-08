<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
	<div class="input-field">
	<?php
	$carrera=$_POST['id_carrera'];
	$materia=$_POST['id_materia'];
	$grupo=$_POST['grupo'];
	$turno=$_POST['turno'];
	$inicio=$_POST['inicio'];
	$final=$_POST['final'];

	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql="INSERT INTO vinc_alumnos(id_carrera,id_materia,grupo,turno,inicio,final) VALUES ('$carrera','$materia','$grupo','$turno','$inicio','$final')";
	$result=mysql_query($sql);
	$cerrar=mysql_close($link);
	echo "Gracias. Hemos recibido sus datos. \n";

	?>
	<br>
	<a href="menu.php"><img src="atras.png" width="5%"></a></div>
</body>

</html>