<?php
	require("conexion.php");
	
	$new_empresa=$_POST['empresa'];
    $new_tipo_empresa=$_POST['tipo_empresa'];
    $new_fecha_inicio=$_POST['fecha_inicio'];
    $new_fecha_final=$_POST['fecha_final'];

	$actualizar = mysql_query("UPDATE contratos SET fecha_inicio='$new_fecha_inicio', fecha_final='$new_fecha_final' WHERE empresa='$new_empresa'AND tipo_empresa='$new_tipo_empresa'",$conexion);  
	

	mysql_close();
	header('Location: sesion_administrador.php');
?>