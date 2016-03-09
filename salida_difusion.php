<?php
require("conexion.php");


$lista="SELECT * FROM difusion";
    $resultado= mysql_query($lista);

    while ($dato= mysql_fetch_array($resultado)) {
        echo "<div class='publicaciones_anteriores'>"; 
    	echo "<div id='cuadro_publicacion_anterior'>";
        echo "<div class='img_perfil_usuario'>";
        echo "<img src='../uploads/".$dato["foto"]."'width='80'>";      
        echo "<p id='p_usuario'>";
        echo $dato['usuario'];
        echo "</p>";
        echo "</div>";    
        echo "<p id='textos_previos'>";
        echo $dato["publi"];
        echo "</p>";       
        echo "</div>";
        echo "</div>";
    }


   mysql_close();
?>