<link rel="stylesheet" type="text/css" href="css/estilos_buscador.css">
<form method="post">
			<p>Busca por Asunto, apartamento o bloque</p> <input type="text" name="busca"><input class="boton_busca" type="submit" id="boton"name="boton_busca" value="Buscar">

</form>
	<table border="1">
	<tr>
		<td class="tit_que">NOMBRES</td>
		<td class="tit_que">BLOQUE</td>
		<td class="tit_que">APARTAMENTO</td>
		<td class="tit_que">ESTADO DE CUENTA</td>
	</tr>

<?php
require("conexion.php");
@$busca=$_POST['busca'];
if ($busca!="") {
	$busqueda=mysql_query("SELECT * FROM usuarios WHERE nombres LIKE '%$busca%' OR apartamento LIKE '%$busca%' OR bloque LIKE '%$busca%'");
	while ($b=mysql_fetch_array($busqueda)) {
		
		echo "<tr>";
			echo "<td>";
			echo $b['nombres'];
			echo "</td>";
			echo "<td>";
			echo $b['bloque'];
			echo "</td>";
			echo "<td>";
			echo $b['apartamento'];
			echo "</td>";
			echo "<td>";
			echo $b['estado_cuenta'];
			echo "</td>";
			echo "<br>";
		echo "</tr>";
	}
}

?>
</table>
<div id='bot_edi_cuentas'><a href='#'>Editar</a></div>

<div class="formulario_edicion">
    <form action="editar_cuentas.php" method="post" id="fomulario_edicion">
                        <p>Nombre del Propietario</p><input type="text" name="nombres" placeholder="Propietario...">
                        <div class="separador"></div>
                        <p>Bloque</p><input type="text" name="bloque" placeholder="bloque...">
                        <div class="separador"></div>
                        <p>Apartamento</p><input type="text" name="apartamento" placeholder="apartamento...">
                        <div class="separador"></div>
                        <p>Estado de cuenta</p><input type="text" name="estado_cuenta" placeholder="estado de cuenta...">
                        <div class="separador"></div>
                        <input id="guardar_contrato" type="submit" name="guardar_contrato" value="editar">
                        <div class="separador"></div>
                    </form>
</div>