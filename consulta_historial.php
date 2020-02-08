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
<title>Consulta de historial académico</title>
<meta charset='utf-8'/>
<link rel="shortcut Icon"  href="logocuh.ico">
<link rel="stylesheet"  href="estilos.css">
<link rel="stylesheet"  href="fonts.css">
<link rel="stylesheet"  href="css/estilos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

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
        </nav></header>
    <center><h3>Historial academico</h3></center>
    <div class="contenedor-formulario">
        <div class="wrap">
              <div class="input-field">
<?php
	session_start();
	$var_sesion1=$_SESSION['alumno'];
	$link = mysql_connect("localhost", "root", "");
    mysql_select_db("escolar", $link);
    $sql="SELECT * FROM calificaciones WHERE id_alumno=$var_sesion1";
    $result=mysql_query($sql);
    echo "<table border = '1' align='center'> \n";
	
	echo "<tr><td align='center'><strong>Materia</strong></td><td align='center'><strong>Calificación</strong></td></tr> \n"; 
    while ($row = mysql_fetch_row($result)){ 
	$sql1="SELECT * FROM materias WHERE id_materia=$row[2]";
    $result1=mysql_query($sql1);
    $row1=mysql_fetch_array($result1);
    $materia=$row1['materia'];
	echo "<tr><td align='center'>$materia</td><td align='center'>$row[4]</td></tr> \n"; 
	}
	echo "</table> \n";
    ?>
<!--<tr><td colspan=4 align="center"><input type=submit value="Enviar" name="enviar"/></td></tr>
</table>-->

<a href="opc_alumno.php"><img src="atras.png" width="5%"></a><br>
<a href="cerrar_sesion_alumno.php">Cerrar sesión</a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
   });</script>
</body>
</html>