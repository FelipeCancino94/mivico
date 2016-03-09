<link rel="stylesheet" type="text/css" href="css/estilos_buscador.css">
<form method="post">
			<p>Search for apartment or building</p> <input type="text" name="busca"><input class="boton_busca" type="submit" id="boton"name="boton_busca" value="Search">

</form>
	<table border="1">
	<tr>
		<td class="tit_que">NAMES</td>
		<td class="tit_que">BUILDING</td>
		<td class="tit_que">APARTMENT</td>
		<td class="tit_que">STATEMENT</td>
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
<div id='bot_edi_cuentas'><a href='#'>Edit</a></div>

<div class="formulario_edicion">
    <form action="editar_cuentas.php" method="post" id="fomulario_edicion">
                        <p>owner's name</p><input type="text" name="nombres" placeholder="Owner...">
                        <div class="separador"></div>
                        <p>Building</p><input type="text" name="bloque" placeholder="Building...">
                        <div class="separador"></div>
                        <p>Apartment</p><input type="text" name="apartamento" placeholder="Apartment...">
                        <div class="separador"></div>
                        <p>Statement</p><input type="text" name="estado_cuenta" placeholder="Statement...">
                        <div class="separador"></div>
                        <input id="guardar_contrato" type="submit" name="guardar_contrato" value="edit">
                        <div class="separador"></div>
                    </form>
</div>