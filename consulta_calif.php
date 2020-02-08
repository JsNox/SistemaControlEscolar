<?php
session_start();
error_reporting(0);
$var_sesion=$_SESSION['alumno'];
if ($var_sesion==null || $var_sesion=''){
   echo "Usted no esta autorizado";
   die();
}
?>
<html>
<head>
<title>Consulta de calificaciones</title>
<meta charset='utf-8'/>
<link rel="shortcut Icon"  href="logocuh.ico">
<link rel="stylesheet"  href="estilos.css">
<link rel="stylesheet"  href="fonts.css">
<link rel="stylesheet"  href="css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
    <center><h3>Consulta de calificaciones</h3></center>
    <div class="contenedor-formulario">
        <div class="wrap">
        <form action="consulta_calificaciones.php" method="POST" name ="formulario_registro" class="formulario">

    <div class="input-field">   
    <select name="carrera">
    <option disabled selected>Carrera</option>
    <?php
	session_start();
	$var_sesion1=$_SESSION['alumno'];
	$link = mysql_connect("localhost", "root", "");
    mysql_select_db("escolar", $link);
    $sql="SELECT * FROM alumnos WHERE matricula=$var_sesion1";
    $result=mysql_query($sql);
    while($row=mysql_fetch_array($result)){
    $carrera=$row['id_carrera'];
    }
    $sql1="SELECT * FROM carreras WHERE id_carrera=$carrera";
    $result1=mysql_query($sql1);
    while($row1=mysql_fetch_array($result1)){
    echo "<option value='".$row1['id_carrera']."'>";
    echo $row1['carrera'];
	}
    ?>
 </select>
</div>
 <div class="input-field">  
    <select name="grupo">       
    <option disabled selected>Grupo</option>
    <?php
    $sql4="SELECT * FROM alumnos WHERE matricula=$var_sesion1";
    $result4=mysql_query($sql4);
    while($row4=mysql_fetch_array($result4)){
    echo "<option value='".$row4['grupo']."'>";
    echo $row4['grupo'];
	}
    ?>
    </select>
</div>
    <div class="input-field">   
    <select name="materia">
    <option disabled selected>Materia</option>
        
	<?php
	$sql5="SELECT * FROM alumnos WHERE matricula=$var_sesion1";
    $result5=mysql_query($sql5);
	$row5=mysql_fetch_array($result5);
	$carrera1=$row5['id_carrera'];
	$grupo1=$row5['grupo'];
    $sql2="SELECT * FROM vinc_alumnos WHERE id_carrera=$carrera1 AND grupo='$grupo1'";
    $result2=mysql_query($sql2);
    while($row2=mysql_fetch_array($result2)){
    $mat=$row2['id_materia'];
	$sql7="SELECT * FROM materias WHERE id_materia=$mat";
    $result7=mysql_query($sql7);
    $row7=mysql_fetch_array($result7);
	echo "<option value='".$row7['id_materia']."'>";
	echo $row7['materia'];
    }
    ?>
    </select>
</div>
    <div class="input-field">   
        <select name="turno">
    <option selected>Turno</option>
   <?php
    $sql6="SELECT * FROM alumnos WHERE matricula=$var_sesion1";
    $result6=mysql_query($sql6);
    while($row6=mysql_fetch_array($result6)){
    echo "<option value='".$row6['turno']."'>";
    echo $row6['turno'];
    }
    ?>
    </select>
</div>
<input type=submit value="Enviar" name="enviar">
</div>
<a href="cerrar_sesion.php">Cerrar sesión</a><br>
<a href="opc_alumno.php"><img src="atras.png" width="5%"></a>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
   });</script>
</body>
</html>