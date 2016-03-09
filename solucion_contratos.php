<!--acá va el contenido de la opcion de solucion2-->
				
				<a href="#"><div id="solucion2"></div></a>
				<div class="contenido_solucion2">	
					<div class="contratos">
						<?php
						include("salida_contratos.php")
						?>
						<div class="separador"></div>
						<div id="boton_registrar"><a class="contrato" href="#">Registrar</a></div>					
					</div>
				<div class="separador"></div>
				<div class="formulario_contrato">
					<form action="contratos.php" method="post">
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
				</div>
				<!--fin del contenido de la opcion de solucion2-->