<?php
@session_start();
require("conexion.php");
	$id_usuario=$_SESSION['id_usuario'];
	$resultado=mysql_query("SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'",$conexion);
// $lista=("SELECT * FROM usuarios WHERE id_usuario=$id_usuario", $conexion);
//     $resultado= mysql_query($lista);

    while ($dato= mysql_fetch_array($resultado)) {
        
       echo "<img src='../uploads/".$dato["foto"]."'width='200'>"; 
    }


   mysql_close();
?>