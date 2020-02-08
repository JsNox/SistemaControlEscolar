
<?php
	session_start();
	$var_sesion1=$_SESSION['alumno'];
	
	$grupo=$_POST['grupo'];
	$link = mysql_connect("localhost", "root", "");
    mysql_select_db("escolar", $link);
	
	$sql1="SELECT * FROM alumnos WHERE grupo='$grupo' and matricula='$var_sesion1'";
    $result1=mysql_query($sql1);
    while($row1=mysql_fetch_array($result1)){
	$materia=$row1['id_materia'];
    }
    var_dump($sql1);
	$sql2="SELECT * FROM materias WHERE id_materia=$materia";
    $result2=mysql_query($sql2);
	$html="<option value='0'>Selecciona</option>";
	
    while($row2=mysql_fetch_array($result2)){
		$html="<option value='".$row2['id_materia']."'>".$row2['materia']."</option>";
		//$html="<option value='".$row2['id_materia']."'>".$sql2."</option>";
	}
	var_dump($sql2);
	echo $html;
?>