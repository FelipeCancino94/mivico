<?php
@session_start();
require("conexion.php");

	$asunto=$_POST['asunto'];
	$queja=$_POST['queja'];
	$apartamento=$_POST['apartamento'];
	$bloque=$_POST['bloque'];
	$id_usuario=$_SESSION['id_usuario'];
	mysql_query("INSERT INTO quejas(asunto,queja,apartamento,bloque,id_usuario) values('$asunto','$queja','$apartamento','$bloque','$id_usuario')");
header('Location: sesion_administrador.php');
	mysql_close();	
?>