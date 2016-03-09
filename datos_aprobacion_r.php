<?php
@session_start();
require("conexion.php");

	$obtener=mysql_query("SELECT * FROM aprobaciones");
	while ($o=mysql_fetch_array($obtener)) {
		$usuario=$o['usuario'];
		$foto=$o['foto'];
		$id_aprobacion=$o['id_aprobacion'];
		$peticion=$o['peticion'];
	}


	$respuesta=$_POST['respuesta'];
	$consecutivo=$_POST['consecutivo'];

	$actualizar = mysql_query("UPDATE aprobaciones SET respuesta='$_POST[respuesta]' WHERE id_aprobacion='$consecutivo'",$conexion);  

header('Location: sesion_administrador.php');



?>