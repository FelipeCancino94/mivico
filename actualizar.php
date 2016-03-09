<?php
@session_start();
	require("conexion.php");
	$id_usuario=$_SESSION['id_usuario'];
	$new_nombres=$_POST['nombres'];
	$new_coreo=$_POST['correo'];
	$new_telefono=$_POST['telefono'];



	$carpeta = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
	$foto = $_FILES['foto']['name'];
	$tipo = $_FILES['foto']['type'];
	$tamano = $_FILES['foto']['size'];

	move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta.$foto);


	$actualizar = mysql_query("UPDATE usuarios SET nombres='$_POST[nombres]',correo='$_POST[correo]',telefono='$_POST[telefono]',foto='$foto' WHERE id_usuario=$id_usuario",$conexion);  
	

	mysql_close();
	header('Location: sesion_administrador.php');
?>