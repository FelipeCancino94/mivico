<!--acá va el contenido de la opcion de solucion5-->				
				<a href="#"><div id="solucion5"></div></a>
				<div class="contenido_solucion5">
					<div class="solicitud">
						<div class="img_perfil_usuario"></div>
						
												
					</div>
					<div class="solicitud">
						
							<?php
						require("conexion.php");

							$lista="SELECT * FROM aprobaciones";
							$consulta= mysql_query($lista);
							while ($dato= mysql_fetch_array($consulta)) {
    									echo "<div class='img_perfil_usuario'>";
    									echo "<img src='../uploads/".$dato["foto"]."'width='80'>"; 
    									echo "<p id='p_usuario'>";
        								echo $dato['usuario'];
        								echo "</p>";     
										echo "</div>";
										echo "<p id='p_radicado'>";
    									echo $dato['id_aprobacion'];
    									echo "</p>";
										echo "<p id='p_peticion'>";										
    									echo $dato['peticion'];
    									echo "</p>";
    									echo "<p>";
    									echo "RESPUESTA:";
    									echo "</p>";
    									echo "<p id='p_respuesta'>";
    									echo $dato['respuesta'];
    									echo "</p>";    									
    									echo "<div class='separador'></div>";
    								}
						?>	
										
							

					</div>
					<div class="separador"></div>
					<div class="ingreso_solicitud">
						<form action="datos_aprobacion_r.php" method="post">
						<p>Consecutivo</p><input type="text" name="consecutivo" placeholder="Número de consecutivo...">
						<textarea name="respuesta" rows="4" cols="70" placeholder="Mensaje de respuesta..." maxlenght="200" required></textarea>
						<div class="separador"></div>
						<input id="boton_enviar_aprobacion" type="submit" value="enviar">
						</form>
					</div>
					<div class="separador"></div>
					<div class="franja_solucion5"></div>
				</div>
				<!--fin del contenido de la opcion de solucion5-->