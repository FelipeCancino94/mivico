<?php
@session_start();
require("conexion.php");

	$obtener=mysql_query("SELECT * FROM quejas");
	while ($o=mysql_fetch_array($obtener)) {
		$apto=$o['apartamento'];
		$bloq=$o['bloque'];
		$id_queja=$o['id_queja'];
		$estado_queja=$o['estado_queja'];
	}


	$respuesta=$_POST['respuesta'];
	$consecutivo=$_POST['consecutivo'];

	$actualizar = mysql_query("UPDATE quejas SET respuesta='$_POST[respuesta]', estado_queja=1 WHERE id_queja='$consecutivo'",$conexion);  

header('Location: sesion_administrador.php');
?>