<?php
session_start();
error_reporting(0);
$var_sesion=$_SESSION['docente'];
if ($var_sesion==null || $var_sesion=''){
   echo "Usted no esta autorizado";
   die();
}
?>
<html>
<head>
<title>Alta de calificaciones</title>
<script language="javascript" src="js/jquery-3.3.1.min.js"></script>
<script language="javascript">
$(document).ready(function() {
    $("#grupo").change(function(){
		$("#grupo option:selected").each(function(){
			grupo=$(this).val();
			$.post("obtenermateria.php",{grupo:grupo}, function(data){
				$("#materia").html(data);
			});
		});
	});
});
</script>
<meta charset='utf-8'/>
    <link rel="stylesheet"  href="estilos.css">
    <link rel="stylesheet"  href="fonts.css">
    <link rel="stylesheet"  href="css/estilos.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style type="text/css">
        p{
            color: black;
            font-family: Century Gothic;
        }
    </style>
</head>
<body>
    <img src="cuh.jpg">
<header>        
        <nav>
            <ul>
                <li><a href="#"><span class="primero"><i class="material-icons">apps</i></span>Inicio</a></li>
                <li><a href="#"><span class="segundo"><i class="material-icons">person</i></span>Iniciar sesion</a>
                    <ul>
                            <li><a href="login_admin.html">Administrador</a></li>
                            <li><a href="login_alumno.html">Alumno</a></li>
                            <li><a href="login_docente.html">Docente</a></li>
                        
                    </ul>
                </li>
                <li><a href="#"><span class="tercero"><i class="material-icons">business_center</i></span>Servicios</a></li>
                <li><a href="#"><span class="cuarto"><i class="material-icons">group</i></span>¿Quienes somos?</a></li>
                <li><a href="#"><span class="quinto"><i class="material-icons">sms</i></span>Contacto</a></li>
            </ul>
        </nav></header>    <center><h1>ALTA DE CALIFICACIONES</h1></center>
<div class="contenedor-formulario">
        <div class="wrap">
<form action="alta_calificaciones.php" method="POST" class="formulario" method="POST">
    <div class="input-group">
    <p>Carrera</p>
    <select name="carrera">
    <option selected>Seleccionar</option>
    <option value=1>Sistemas</option>
    <option value=2>Derecho</option>
    <option value=3>Contaduría</option>
    <option value=4>Psicología</option>
    <option value=5>Educación</option>
    <option value=6>Administración y sistemas</option>
    </select>
    </div>
    <div class="input-group">
        <p>Grupo:</p>

    <select name="grupo" id="grupo">
    <option selected>Selecciona</option>
    <?php
	session_start();
	$var_sesion1=$_SESSION['docente'];
	$link = mysql_connect("localhost", "root", "");
    mysql_select_db("escolar", $link);
    $sql="SELECT * FROM vincula WHERE id_docente=$var_sesion1";
    $result=mysql_query($sql);
    while($row=mysql_fetch_array($result)){
    echo "<option value='".$row['grupo']."'>";
	$grupo=$row['grupo'];
    echo $grupo;
    }
    ?>
    </select>
    </div>
    <div class="input-group">
        <p>Materia</p>
    <select name="materia" id="materia"> 
        <option selected>Selecciona</option>
    <?php
    session_start();
    $var_sesion1=$_SESSION['docente'];
    $link = mysql_connect("localhost", "root", "");
    mysql_select_db("escolar", $link);
    $sql="SELECT * FROM vincula WHERE id_docente=$var_sesion1";
    $result=mysql_query($sql);
    while($row=mysql_fetch_array($result)){
    echo "<option value='".$row['id_materia']."'>";
    $grupo=$row['id_materia'];
    echo $grupo;
    }
    ?>
    </select>
</div>
    <div class="input-group">
    <p>Turno</p>
    <select name="turno">
    <option selected>Selecciona</option>
    <?php
    $sql="SELECT * FROM vincula WHERE id_docente=$var_sesion1";
    $result=mysql_query($sql);
    while($row=mysql_fetch_array($result)){
    echo "<option value='".$row['turno']."'>";
	$turno=$row['turno'];
    echo $turno;
    }
    ?>
    
    </select>
    </div>
    <input type="submit" id="btn-submit" value="Enviar">
        </div>
</form>
<a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>