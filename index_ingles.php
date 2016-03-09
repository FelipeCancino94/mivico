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
					<li id="barr_ini"><a href="#">Log In</a></li>
					<li id="barr_reg"><a href="#">Register</a></li>
				</ul>
			</div></a>
			<!--aquí va el código de inicio de sesion-->
						<div id="fondo_pagina_1">
	<div class="contenedor_sesion">
		<div class="linea_sesion"></div>
			<form id="sesion" action="inicio_sesion.php" method="post"><!--action: donde se guardaràn los datos del formulario-->
				<p>User</p><input type="text" name="usuario" placeholder="User..." required>
				<div class="separador"></div>

				<p>Password</p><input type="password" name="clave" placeholder="Password..." required>
				<div class="separador"></div>					
				<input id="boton_ingreso" type="submit" name="guardar "value="Log In" >
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
				<p>Names</p><input type="text" name="nombres" placeholder="Names..." required>
				<div class="separador"></div>
				<p>User</p><input type="text" name="usuario" placeholder="user..." required>
				<div class="separador"></div>
				<p>E-mail</p><input type="text" name="correo" placeholder="E-mail..." required>		
				<div class="separador"></div>
				<p>Gated community</p><input type="text" name="conjunto" placeholder="Gated Community..." required>
				<div class="separador"></div>
				<p>Building</p><input type="text" name="bloque" placeholder="Building..." required>
				<div class="separador"></div>
				<p>Apartment</p><input type="text" name="apartamento" placeholder="Apartment..." required>
				<div class="separador"></div>
				<p>Password</p><input type="password" name="clave" placeholder="Password..." required>
				<div class="separador"></div>	
				<input id="boton_guardar" type="submit" name="guardar "value="Register" >
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
					<li><a href="index_ingles.php">English</a></li>
					<li class="slash">/</li>
					<li><a href="index.php">Spanish</a></li>
				</ul>
				<ul class="sesion">
					<li id="ini"><a href="#">Log In</a></li>					
					<li class="slash">/</li>
					<li id="reg"><a href="#">Register</a></li>
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
					<iframe width="1024" height="477" src="https://www.youtube.com/embed/BPz1GaUUr8Y" frameborder="0" allowfullscreen></iframe>
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
					<img src="img/infografia_ingles.jpg">
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
			<p>2015 ©COPYRIGHT Mivico TLD. All rights reserved.</p>
		</div>
	</footer>




</body>
</html>