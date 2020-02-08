<html>
<head>
	<title>Validar docente</title>
<meta charset="utf-8"/>
</head>
<body>
	<?php
	$id_docente=$_POST['Id_docente'];
	$pass=$_POST['pass'];

	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql="SELECT * FROM docentes WHERE id_docente='$id_docente' and pass='$pass'";
	$result=mysql_query($sql);

	$filas=mysql_num_rows($result);
	if($filas>0){
		session_start();
		$_SESSION['docente']=$id_docente;
		header("location:alta_calif.php");
	}
	else{
		echo "El usuario o contraseña no existen, favor de verificar";
	}
	mysql_close($link);
	echo "Gracias. Hemos recibido sus datos. \n";

	?>
</body>
</html>