<?php
	session_start();
	$var_sesion1=$_SESSION['docente'];
	
	$grupo=$_POST['grupo'];
	$link = mysql_connect("localhost", "root", "");
    mysql_select_db("escolar", $link);
	
	$sql="SELECT * FROM vincula WHERE grupo='$grupo' and id_docente='$var_sesion1'";
    $result=mysql_query($sql);
	$html1="<option value='0'>Selecciona</option>";
    while($row=mysql_fetch_array($result)){
		$html1="<option value='".$row['turno']."'>".$row['turno']."</option>";
	}
	echo $html1;
?>