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
        <div id='bot_edi_cont'><a href='#'>Edit</a></div>

<div class="formulario_edicion">
    <form action="editar_contrato.php" method="post" id="fomulario_edicion">
                        <p>Company name</p><input type="text" name="empresa" placeholder="Company...">
                        <div class="separador"></div>
                        <p>Type of service</p><input type="text" name="tipo_empresa" placeholder="service...">
                        <div class="separador"></div>
                        <p>Contract start date</p><input type="date" name="fecha_inicio">
                        <div class="separador"></div>
                        <p>Contract end date</p><input type="date" name="fecha_final">
                        <div class="separador"></div>
                        <input id="guardar_contrato" type="submit" name="guardar_contrato" value="Save">
                        <div class="separador"></div>
                    </form>
</div>