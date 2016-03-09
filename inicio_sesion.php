<?php 
session_start();    

require("conexion.php");

$usuario = $_POST['usuario'];   
$clave = $_POST['clave'];  
@$correo= $_POST['correo'];
@$telefono=$_POST['telefono'];
@$id_usuario=$_POST['id_usuario'];

$consulta = mysql_query('SELECT * FROM usuarios', $conexion);

while ($datos = mysql_fetch_array($consulta)) {    
	$usuario_db = $datos['usuario'];   
	$clave_db = $datos['clave'];    
	$id_perfil_db = $datos['id_perfil'];
	$correo_db=$datos['correo'];
	$telefono_db=$datos['telefono'];
	$id_usuario_db=$datos['id_usuario'];

	if ($usuario == $usuario_db && $clave == $clave_db ) {   
		$_SESSION['usuario'] = $usuario;  
		$_SESSION['clave'] = $clave;
		$_SESSION['id_perfil'] =$id_perfil_db;
		$_SESSION['id_usuario']=$id_usuario_db;
		$_SESSION['correo']=$correo;
		$_SESSION['telefono']=$telefono;

		//-----------------------------------------------------

		echo "<meta http-equiv='refresh' content='0;url=sesion_administrador.php'>";
		
	}

}
mysql_close();
?> 