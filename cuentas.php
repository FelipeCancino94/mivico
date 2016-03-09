<?php

	$nombres=$_POST['nombres'];
 	$bloque=$_POST['bloque'];
	$apartamento=$_POST['apartamento'];
	$estado=$_POST['estado'];
 	

	require("conexion.php");
	mysql_query("INSERT INTO cuentas(nombres,bloque,apartamento,estado) values('$nombres','$bloque','$apartamento','$estado')");


header('Location: sesion_administrador.php');

mysql_close();

//------------------------------------------------------
    
?>