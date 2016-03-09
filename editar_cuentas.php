<?php
	require("conexion.php");
	
	$nombres=$_POST['nombres'];
    $bloque=$_POST['bloque'];
    $apartamento=$_POST['apartamento'];
    $estado_cuenta=$_POST['estado_cuenta'];

	$actualizar = mysql_query("UPDATE usuarios SET estado_cuenta='$estado_cuenta' WHERE nombres='$nombres' AND bloque='$bloque' AND apartamento='$apartamento'",$conexion);  
	

	mysql_close();
	header('Location: sesion_administrador.php');
?>