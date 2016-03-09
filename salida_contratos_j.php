<?php
require("conexion.php");

	$lista="SELECT * FROM contratos";
    $resultado= mysql_query($lista);

    while ($dato= mysql_fetch_array($resultado)) {
    	echo "<div class='contratos'>";
    	echo "<div class='linea_vertical'></div>";
        echo "<p id='empresa_nombre'>";
        echo $dato["empresa"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<p id='empresa_id'>";
        echo $dato["tipo_empresa"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<p id='fecha_inicio'>";
        echo $dato["fecha_inicio"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<p id='fecha_fin'>";
        echo $dato["fecha_final"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "</div>";
    }


   mysql_close();


?>
  

<div class="formulario_edicion">
    <form action="editar_contrato.php" method="post" id="fomulario_edicion">
                        <p>Nombre de la empresa</p><input type="text" name="empresa" placeholder="empresa...">
                        <div class="separador"></div>
                        <p>Tipo de servicio</p><input type="text" name="tipo_empresa" placeholder="servicio...">
                        <div class="separador"></div>
                        <p>Fecha de inicio de contarato</p><input type="date" name="fecha_inicio">
                        <div class="separador"></div>
                        <p>Fecha de fin de contrato</p><input type="date" name="fecha_final">
                        <div class="separador"></div>
                        <input id="guardar_contrato" type="submit" name="guardar_contrato" value="Guardar">
                        <div class="separador"></div>
                    </form>
</div>