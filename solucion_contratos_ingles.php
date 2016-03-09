<!--acá va el contenido de la opcion de solucion2-->
				
				<a href="#"><div id="solucion2"></div></a>
				<div class="contenido_solucion2">	
					<div class="contratos">
						<?php
						include("salida_contratos_ingles.php")
						?>
						<div class="separador"></div>
						<div id="boton_registrar"><a class="contrato" href="#">Register</a></div>					
					</div>
				<div class="separador"></div>
				<div class="formulario_contrato">
					<form action="contratos.php" method="post">
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
				</div>
				<!--fin del contenido de la opcion de solucion2-->