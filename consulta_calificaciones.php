<html>
<head>
<title>Consulta calificaciones</title>
<meta charset='utf-8'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="shortcut Icon"  href="logocuh.ico">
<link rel="stylesheet"  href="estilos.css">
<link rel="stylesheet"  href="fonts.css">
<link rel="stylesheet"  href="css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
        <img src="cuh.jpg">
<header>        
        <nav>
            <ul class="row">
                <li class="col s3"><a href="#"><span class="primero"><i class="material-icons">apps</i></span>Inicio</a></li>
                <li class="col s3"><a href="#"><span class="segundo"><i class="material-icons">person</i></span>Iniciar sesion</a>
                    <ul>
                            <li><a href="login_admin.html">Administrador</a></li>
                            <li><a href="login_alumno.html">Alumno</a></li>
                            <li><a href="login_docente.html">Docente</a></li>
                        
                    </ul>
                </li>
                <li class="col s3"><a href="#"><span class="cuarto"><i class="material-icons">group</i></span>¿Quienes somos?</a></li>
                <li class="col s3"><a href="#"><span class="quinto"><i class="material-icons">sms</i></span>Contacto</a></li>
            </ul>
        </nav></header>
    <center><h3>Calificacion del alumno</h3></center>
    <div class="contenedor-formulario">
        <div class="wrap">  
        <div class="input-field"> 
<?php
session_start();
$var_sesion=$_SESSION['alumno'];
$carrera=$_POST['carrera'];
$grupo=$_POST['grupo'];
$materia=$_POST['materia'];
$turno=$_POST['turno'];
?>
<table border=1 align="center">
<tr>
<tr><td>Materia:</td>
<td>
 <?php
	$link = mysql_connect("localhost", "root", "");
    mysql_select_db("escolar", $link);
	$sql1="SELECT * FROM materias WHERE id_materia=$materia";
    $result1=mysql_query($sql1);
    $row1=mysql_fetch_array($result1);
    echo $row1['materia'];
    ?>
</td>
<td>Calificación:</td>
<td> <?php
    $sql="SELECT * FROM calificaciones WHERE id_alumno=$var_sesion AND id_materia=$materia";
    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);
    echo $row['calificacion'];
    ?>
</td>
</tr>
</table>
<a href="consulta_calif.php">Consulta otra calificación</a>
</div>
</body>
</html>