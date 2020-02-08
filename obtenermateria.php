<?php
	session_start();
	$var_sesion1=$_SESSION['docente'];
	
	$grupo=$_POST['grupo'];
	$link = mysql_connect("localhost", "root", "");
    mysql_select_db("escolar", $link);
	
	$sql1="SELECT * FROM vincula WHERE grupo='$grupo' and id_docente='$var_sesion1'";
    $result1=mysql_query($sql1);
    while($row1=mysql_fetch_array($result1)){
	$materia=$row1['id_materia'];
    }
	$sql2="SELECT * FROM materias WHERE id_materia=$materia";
    $result2=mysql_query($sql2);
	$html="<option value='0'>Selecciona</option>";
	
    while($row2=mysql_fetch_array($result2)){
		$html="<option value='".$row2['id_materia']."'>".$row2['materia']."</option>";
		//$html="<option value='".$row2['id_materia']."'>".$sql2."</option>";
	}
	echo $html;
?>