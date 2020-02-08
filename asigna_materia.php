<?php
	$link=mysql_connect("localhost","root","");
	mysql_select_db("escolar",$link);
	?>
<html>
<head>
<title>Asignación de materias por grupos</title>
<meta charset="utf-8"/>
<style >
	
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
		body{
		background: url("fondo1.jpg")no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		
</style>
<link rel="shortcut Icon"  href="logocuh.ico">
</head>
<body>
	<img src="cuh.jpg">
	<br><br>
	<form action="asigna_mat_gpo.php" method="POST">
		<table border="1" align="center" id="t01">
			<tr>
				<td colspan="2" align="center"><h2>ASIGNACIÓN DE MATERIAS</h2></td>
			</tr>
			<tr>
				<td>Carrera</td>
	<td><select name="carrera">
					<option selected>Seleccionar</option>
					<option value="1">Sistemas</option>
					<option value="2">Derecho</option>
					<option value="3">Contaduría</option>
					<option value="4">Psicología</option>
					<option value="5">Educación</option>
					<option value="6">Administración y sistemas</option>
					
					</select></td>
				</tr>
						<td>Materia</td>
				<td><select name="id_materia">
					<option selected>Seleccionar</option>
					<?php
					$sql1="SELECT * FROM materias";
					$result1=mysql_query($sql1);
					while ($row1=mysql_fetch_array($result1)){
						echo "<option value='".$row1['id_materia']."'>";
						echo $row1['materia'];
					}
					?>
				</select></td>
			</tr>
			<tr><td>Turno:</td>
				<td><select name="turno">
					<option selected>Seleccionar</option>
					<option value="Matutino">Matutino</option>
					<option value="Vespertino">Vespertino</option>
					<option value="Mixto">Mixto</option>
				</select>
					
				</td>
			</tr>
			<tr><td colspan="2" align="center"><input type="submit" value="Enviar"></td></tr>
		</table>
	</form>
</body>
</html>