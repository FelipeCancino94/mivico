<?php
    $nombres=$_POST['nombres'];
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    $id_perfil=$_POST['id_perfil'];
    $correo=$_POST['correo'];
    $conjunto=$_POST['conjunto'];
    $bloque=$_POST['bloque'];
    $apartamento=$_POST['apartamento'];
    $telefono=$_POST['telefono'];
    $foto=$_POST['img_perfil'];




 

	require_once ("conexion.php"); 
       
        mysql_query("INSERT INTO usuarios(nombres,usuario,clave,id_perfil,correo,conjunto,bloque,apartamento,telefono,foto) values('$nombres','$usuario','$clave','$id_perfil','$correo','$conjunto','$bloque','$apartamento','$telefono','$foto')") or die (mysql_error()); 

$sql=mysql_query("SELECT max(id_usuario) FROM usuarios WHERE 1");
$sql=mysql_fetch_row($sql);
session_start();
$_SESSION['id_usuario']=$sql[0];
$_SESSION['id_perfil']=$id_perfil;

$_SESSION['usuario'] = $usuario;  
		$_SESSION['clave'] = $clave;
		$_SESSION['id_perfil'] =$id_perfil_db;
		
		$_SESSION['correo']=$correo;
		$_SESSION['telefono']=$telefono;

//-----------------------------------------------------  
mysql_close();
echo "<meta http-equiv='refresh' content='0;url=sesion_administrador.php'>";
?>