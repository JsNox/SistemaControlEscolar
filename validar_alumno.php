<!DOCTYPE html>
<html>
<head>
	<title>Validar alumno</title>
	<meta charset="utf-8"/>
</head>
<body>
<?php
	$matricula=$_POST['matricula'];
	$pass=$_POST['pass'];

	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql="SELECT * FROM alumnos WHERE matricula='$matricula' and password='$pass'";
	$result=mysql_query($sql);
	$rows=mysql_num_rows($result);
	if($rows>0){
		session_start();
		$_SESSION['alumno']=$matricula;
		header("location:opc_alumno.php");
	}
	else{
		echo "El usuario o contraseña no existen, favor de verificar";
	}

	mysql_close($link);
	
?>
</body>
</html>