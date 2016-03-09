<?php
@session_start();
$id_usuario=$_SESSION['id_usuario'];
		require("conexion.php");

		$lista="SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
    					$resultado= mysql_query($lista);
							while ($dato= mysql_fetch_array($resultado)) {
        						$usuario_a=$dato["usuario"];
        						$foto_a=$dato['foto'];
   							}
   								$peticion=$_POST['peticion'];
   							mysql_query("INSERT INTO aprobaciones(peticion,usuario,foto) values('$peticion','$usuario_a','$foto_a')");
   							header('Location: sesion_administrador.php');
?>