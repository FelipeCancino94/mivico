<?php  
session_start();

$perfil_sesion = $_SESSION['id_perfil'];

switch ($perfil_sesion) {
	case 1:
		include("sesiones_admin.php");
		
	break;
	case 2:
		include("sesiones_junta.php");
	
	break;
	case 3:
		include("sesiones_propi_arren.php");


		
		
	break;
	default:
	include("sesiones_admin.php");
		// echo "No existe ese tipo de usuario";
	break;
}



?>

