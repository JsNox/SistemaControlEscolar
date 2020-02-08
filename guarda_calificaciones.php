<html>
<head>
<meta charset="utf-8" />
<title>Alta de calificaciones</title>
</head>
<body>
<?php
$link = mysql_connect("localhost", "root", "");
mysql_select_db("escolar", $link);

$c=$_POST['conta'];
$carrera=$_POST['carrera'];
$materia=$_POST['materia'];
for ($i=1;$i<=$c;$i++){
	$calif=$_POST['calif'.$i];
	$id=$_POST['id'.$i];
	$sql = "INSERT INTO calificaciones(id_carrera, id_materia, calificacion, id_alumno) VALUES ('$carrera','$materia', '$calif','$id')";
	$result = mysql_query($sql);
}

$cerrar=mysql_close($link);
echo "Gracias. Hemos recibido sus datos.\n";
?>
</br>
<a href="alta_calif.php">Regresar</a>
</body>
</html>