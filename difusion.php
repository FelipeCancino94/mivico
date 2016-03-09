<?php
	@session_start();
	$publi=$_POST['publi'];
 		$id_usuario=$_SESSION['id_usuario'];

	require("conexion.php");

	$lista="SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
    $resultado= mysql_query($lista);
	while ($dato= mysql_fetch_array($resultado)) {
    	
        $usuario_p=$dato["usuario"];
        $foto_p=$dato['foto'];

       
    }

	mysql_query("INSERT INTO difusion(publi,usuario,foto) values('$publi','$usuario_p','$foto_p')");


header('Location: sesion_administrador.php');

mysql_close();

//------------------------------------------------------
 
?>