<!--acá va el contenido de la opcion de solucion3-->
<?php
	@session_start();
	$id_usuario=$_SESSION['id_usuario'];

?>			
				<a href="#"><div id="solucion3"></div></a>
				<div class="contenido_solucion3">
					<div class="cuentas">
						<?php
						// 
						// 	echo $dato['estado_cuenta'];
						// 

						require("conexion.php");


$lista="SELECT * FROM usuarios WHERE id_usuario=$id_usuario";
    $resultado= mysql_query($lista);

    while ($dato= mysql_fetch_array($resultado)) {
    	echo "<h1>Su estado actual con la cuota de administración es:";
        echo $dato["estado_cuenta"];
        echo "</h1>";
       
    }


   mysql_close();
						?>		
						<div class="separador"></div>
										
					</div>
				

				</div>
				<!--fin del contenido de la opcion de solucion3