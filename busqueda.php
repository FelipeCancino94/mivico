<?php
require("conexion.php");

	$busca=$_POST['buscador'];
	if ($busca!="") {
		$busqueda=mysql_query("SELECT * FROM `usuarios` WHERE `nombres` LIKE '%" .$busca. "%' OR `bloque` LIKE '%".$busca."%' OR `apartamento` LIKE '%".$busca."%'");
		
		//SELECT * FROM 'usuarios' WHERE nombres LIKE '%.$busca.%' OR bloque LIKE '%.$busca.%' OR apartamento LIKE '%.$busca.%'
		while ($r=mysql_fetch_array($busqueda)) {
		echo "<div class='cuentas'>";
    	echo "<div class='linea_vertical'></div>";
        echo "<p id='nombre_habitante'>";
        echo $r["nombres"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<p id='bloque_habitante'>";
        echo $r["bloque"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<p id='apartamento_habitante'>";
        echo $r["apartamento"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<p id='estado_habitante'>";
        echo $r["estado_cuenta"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<a href='#'>Editar</a>";
        echo "</div>";
		}
	}

?>