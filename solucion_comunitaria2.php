

<a href="#"><div id="solucion"></div></a>
				<!--acá va el contenido de la opcion de solucion-->
				<div class="contenido_solucion">
					<!-- <div class="peticion">
						<div class="estado_peticion"></div>
						<div class="linea_vertical"></div>
						<p id="de"></p>
						<div class="linea_vertical"></div>
						<p id="item"></p>
						<div class="linea_vertical"></div>
						<p id="vivienda"></p>
						<div class="linea_vertical"></div>
						<p id="fecha_recibido"></p>
					</div> -->
					<div class="separador"></div>
					<div class="linea_separacion"></div>
					<div class="separador"></div>
					<table border="1" id="propi_queja">
	<tr>
		<td class="tit_que">ASUNTO</td>
		<td class="tit_que">QUEJA</td>
		<td class="tit_que">RESPUESTA</td>
	</tr>
						<?php
						@session_start();
						$id_usuario=$_SESSION['id_usuario'];

						require("conexion.php");

						$lista="SELECT * FROM quejas";
   	 			$resultado= mysql_query($lista);
   	 	 				while ($dato= mysql_fetch_array($resultado)) {
   	 						echo "<tr>";
			echo "<td>";
			echo $dato['asunto'];
			echo "</td>";
			echo "<td>";
			echo $dato['queja'];
			echo "</td>";
			echo "<td>";
			echo $dato['respuesta'];
			echo "</td>";
			
		echo "</tr>";
      					echo "</div>";
   						}

							
							
							
						?></table>

					
					<div class="separador"></div>
					<div class="mensaje_solucion">
						<form action="quejas.php" method="post">
							<p>Asunto</p><input id="asunto" type="tex" name="asunto" placeholder="Asunto..." maxlength="80">
							<div class="separador"></div>
							<p>Apartamento</p><input id="apartamento" type="tex" name="apartamento" placeholder="Apartamento..." maxlength="80">
							<div class="separador"></div>
							<p>bloque</p><input id="bloque" type="tex" name="bloque" placeholder="bloque..." maxlength="80">
							<textarea name="queja" rows="10" cols="100" placeholder="Mensaje..." maxlength="150"></textarea>
							<div class="separador"></div>
							<input id="boton_enviar" type="submit" name="enviar" value="enviar">
						</form>
					</div>
					<div class="separador"></div>
				</div>
				<!--fin del contenido de la opcion de solucion-->