<?php
@session_start();
require("conexion.php");

$id_usuario=$_SESSION['id_usuario'];
	$lista="SELECT nombres,correo,telefono FROM usuarios WHERE id_usuario=$id_usuario";
    $consulta= mysql_query($lista) or die (mysql_error());


    while ($datos= mysql_fetch_array($consulta)) {
    	echo "<p id='info1'>";
		echo $datos['nombres'];
		echo "</p>";
		echo "<p id='info2'>";
		echo $datos['correo'];
		echo "</p>";
		echo "<p id='info3'>";
		echo $datos['telefono'];
		echo "</p>";

    }

	

?>