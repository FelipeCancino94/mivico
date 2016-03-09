<!--acá va el contenido de la opcion de solucion4-->
				
				<a href="#"><div id="solucion4"></div></a>
				<div class="contenido_solucion4">
					<div class="difusion_sesion_propi">
						<form action="difusion.php" method="post">
						<div class="img_perfil_usuario">
							<?php
							require("conexion.php");
							@session_start();
							$id_usuario=$_SESSION['id_usuario'];
							$resultado=mysql_query("SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'",$conexion);
							while ($dato= mysql_fetch_array($resultado)) {       
       							echo "<img src='../uploads/".$dato["foto"]."'width='60'>";
       							echo "<p>";
       							echo $dato['usuario'];
       							echo "</p>"; 
    						}
							?>
						</div>
						<textarea name="publi" rows="4" cols="70" placeholder="   Realiza tu publicación aquí..." maxlength="150" require></textarea>
						<input type="submit" name="publicar" value="publicar" id="boton_publicar">
						</form> 
					</div>
					<div class="separador"></div>
											
						<?php
						include("salida_difusion.php");
						?>
					

				</div>
