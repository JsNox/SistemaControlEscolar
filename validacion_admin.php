<html>
<body>
<?php
	$id_admin=$_POST['id_admin'];
	$pass=$_POST['pass'];



	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	$sql="SELECT * FROM admin WHERE id_admin='$id_admin' and passw='$pass'";
	$result=mysql_query($sql);
	$rows=mysql_num_rows($result);
	if($rows>0){
		session_start();
		$_SESSION['administrador']=$id_admin;
		header("location:menu.php");
	}
	else{
		echo "El usuario o contraseña no existen, favor de verificar";
	}

	mysql_close($link);
	
?>
</body>
</html>