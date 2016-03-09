<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mivico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#barra_menu").click(function(){
			$("#barra_menu ul").toggle();
		});
		$("#ini").click(function(){
			$("#fondo_pagina_1").toggle();
			$("#fondo_pagina_2").hide();
		});
		$("#reg").click(function(){
			$("#fondo_pagina_2").toggle();
			$("#fondo_pagina_1").hide();
		});
		
		$("#barr_ini").click(function(){
			$("#fondo_pagina_1").toggle();
			$("#fondo_pagina_2").hide();
		});
		$("#barr_reg").click(function(){
			$("#fondo_pagina_2").toggle();
			$("#fondo_pagina_1").hide();
		});
		//jquery para la resolucion 320, menu de opciones (fin)


	});
	</script>
</head>
<body>
	
	<header>
		<div class="contenedor">
			<a href="#"><div id="barra_menu">
				<ul>
					<li id="barr_ini"><a href="#">Iniciar sesion</a></li>
					<li id="barr_reg"><a href="#">Registro</a></li>
				</ul>
			</div></a>
			<!--aquí va el código de inicio de sesion-->
						<div id="fondo_pagina_1">
	<div class="contenedor_sesion">
		<div class="linea_sesion"></div>
			<form id="sesion" action="inicio_sesion.php" method="post"><!--action: donde se guardaràn los datos del formulario-->
				<p>Usuario</p><input type="text" name="usuario" placeholder="Nombre de usuario..." required>
				<div class="separador"></div>

				<p>Clave</p><input type="password" name="clave" placeholder="Digite la clave..." required>
				<div class="separador"></div>					
				<input id="boton_ingreso" type="submit" name="guardar "value="Ingreso" >
				<div class="separador"></div>
			</form>
		<div class="linea_sesion"></div>
	</div>
</div>
					<!--fin del código de inicio de sesion-->
					<!--aquí va el código de registro-->
					
					<div id="fondo_pagina_2">
	<div class="contenedor_registro">
		<div class="linea_registro"></div>
			<form id="registro" action="registro.php" method="post"><!--action: donde se guardaràn los datos del formulario-->
				<p>Nombres</p><input type="text" name="nombres" placeholder="Nombres completos..." required>
				<div class="separador"></div>
				<p>Usuario</p><input type="text" name="usuario" placeholder="Nombre de usuario..." required>
				<div class="separador"></div>
				<p>Correo electrónico</p><input type="text" name="correo" placeholder="Correo..." required>		
				<div class="separador"></div>
				<p>Conjunto residencial</p><input type="text" name="conjunto" placeholder="Conjunto..." required>
				<div class="separador"></div>
				<p>Bloque</p><input type="text" name="bloque" placeholder="Bloque..." required>
				<div class="separador"></div>
				<p>Apartamento</p><input type="text" name="apartamento" placeholder="Apartamento..." required>
				<div class="separador"></div>
				<p>Clave</p><input type="password" name="clave" placeholder="Digite la clave..." required>
				<div class="separador"></div>	
				<input id="boton_guardar" type="submit" name="guardar "value="Registro" >
				<div class="separador"></div>
			</form>
		<div class="linea_registro"></div>
	</div>
</div>
					<!--fin del código de registro-->
					<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<div id="logo"></div>
			<div id="menu">
				<ul class="idiomas">
					<li><a href="index_ingles.php">Inglés</a></li>
					<li class="slash">/</li>
					<li><a href="index.php">Español</a></li>
				</ul>
				<ul class="sesion">
					<li id="ini"><a href="#">Iniciar Sesión</a></li>					
					<li class="slash">/</li>
					<li id="reg"><a href="#">Registro</a></li>
				</ul>
			</div>
			<div class="separador"></div>
			<div class="linea1"></div>
		</div>
	</header>
	<div class="separador"></div>
<body style="margin:0 ;padding:0;">
	<div class="contenedor">
		<section>
			<article>
				<div id="spot">
					<iframe width="1024" height="477" src="https://www.youtube.com/embed/e5G7POkn0II" frameborder="0" allowfullscreen></iframe>
					<!-- <iframe src="https://www.youtube.com/watch?v=e5G7POkn0II&feature=youtu.be" width="1024" height="477"></iframe> --><!--acá va el link del spot publicitario-->
				</div>
			</article>
		</section>
		<div class="separador"></div>
		<div class="linea2"></div>
	</div>
	<div class="contenedor">
		<section>
			<article>
				<div class="infografia">
					<img src="img/infografia_completa.jpg">
				</div>
			</article>
		</section>
	</div>
	<div class="separador"></div>
	<footer>
		<div id="fondo_footer"></div>
		<div class="contenedor">
			<ul class="contactos_footer">		
				<li><a href="https://www.facebook.com/mivicolombia?ref=aymt_homepage_panel"><img src="img/face.png" width="18" heigth="18">Mivico</a></li>
				<li class="slash1">/</li>			
				<li><a href="https://twitter.com/SomosMivico"><img src="img/twit.png" width="18" height="18">@SomosMivico</a></li>
				<li class="slash1">/</li>
				<li><a href="#"><img src="img/phone.png" width="18" height="18">3112764113</a></li>
				<li class="slash1">/</li>
				<li><a href="#"><img src="img/mail.png" width="18" height="18">mivicolombia@gmail.com</a></li>
			</ul>
			<div class="separador"></div>
			<p>2015 ©COPYRIGHT Mivico TLD. Todos los derechos reservados</p>
		</div>
		
	</footer>




</body>
</html>