<link rel="stylesheet" type="text/css" href="css/estilos_buscador.css">

<form method="post">
			<p>Busca por Asunto, apartamento o bloque</p> <input type="text" name="busca"><input class="boton_busca" type="submit" id="boton"name="boton_busca" value="Buscar">

		</form>
<table border="1">
	<tr>
		<td class="tit_que">BLOQUE</td>
		<td class="tit_que">APARTAMENTO</td>
		<td class="tit_que">ASUNTO</td>
		<td class="tit_que">QUEJA</td>
<!-- 		<td class="tit_que">FECHA DE RECIBIDO</td>
 -->		<td class="tit_que">CONSECUTIVO</td>
	</tr>

<?php
require("conexion.php");


@$busca=$_POST['busca'];
if ($busca!="") {
	$busqueda=mysql_query("SELECT * FROM quejas WHERE apartamento LIKE '%$busca%' OR bloque LIKE '%$busca%' OR asunto LIKE '%$busca%'");
	while ($b=mysql_fetch_array($busqueda)) {
		// echo "<table border='1'>";
		
		echo "<tr>";
			echo "<td>";
			echo $b['bloque'];
			echo "</td>";
			echo "<td>";
			echo $b['apartamento'];
			echo "</td>";
			echo "<td>";
			echo $b['asunto'];
			echo "</td>";
			echo "<td>";
			echo $b['queja'];
			echo "</td>";
			// echo "<td>";
			// echo $b['fecha_envio'];
			// echo "</td>";
			echo "<td>";
			echo $b['id_queja'];
			echo "</td>";
			echo "<br>";
		echo "</tr>";
		
		
		// echo "</table>";
	}
}


?>
	</table>
<div id="td_respuesta">
<form id='respuesta' action='respuesta.php' method='post'>
	<P>CONSECUTIVO</P><input type='text' id='consecutivo' name='consecutivo' placeholder="Consecutivo de queja.">
	<div class="separador"></div>
	<p>RESPUESTA</p>
	<div class="separador"></div>
	<textarea id='ingreso_resp' name='respuesta' placeholder="Respuesta..." maxlength="150"> </textarea>
	<div class="separador"></div>
 	<input type='submit' value='Responder' id='boton_respuesta'>
</form>
</div>