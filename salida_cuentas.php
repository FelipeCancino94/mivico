<?php
require("conexion.php");


$lista="SELECT * FROM usuarios";
    $resultado= mysql_query($lista);

    while ($dato= mysql_fetch_array($resultado)) {
    	echo "<div class='cuentas'>";
    	echo "<div class='linea_vertical'></div>";
        echo "<p id='nombre_habitante'>";
        echo $dato["nombres"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<p id='bloque_habitante'>";
        echo $dato["bloque"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<p id='apartamento_habitante'>";
        echo $dato["apartamento"];
        echo "</p>" ;
        echo "<div class='linea_vertical'></div>";
        echo "<p id='estado_habitante'>";
        echo $dato["estado_cuenta"];
        echo "</p>" ;
        echo "</div>";
    }


   mysql_close();
?>
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