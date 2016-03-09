<?php  
$conexion = mysql_connect('localhost','mivicoco_root','mivico') or die(mysql_error()); 
if (!$conexion) {
	die('<strong>No pudo conectarse:</strong> ' . mysql_error());
}else{
	//echo "conexion sin problemas";
}
$bd = mysql_select_db('mivicoco_mivico', $conexion) or die(mysql_error());
if (!$bd) {
	die('<strong>No pudo conectarse:</strong> ' . mysql_error());
}else{
	//echo "conexion a base de datos sin problemas";
}




?>