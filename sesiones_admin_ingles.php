<!DOCTYPE html>
<html>
<head>
	<title>Mivico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos_sesiones_ingles.css">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<!--inicio script de solucion-->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#enlace_a").click(function(){
				$(".cuadro_info").toggle();
				$(".contenido_solucion").hide();
				$(".contenido_solucion2").hide();
				$(".contenido_solucion3").hide();
				$(".contenido_solucion4").hide();
				$(".contenido_solucion5").hide();
			});
			$("#solucion").click(function(){
				$(".contenido_solucion").toggle();
				$(".cuadro_info").hide();
				$(".contenido_solucion2").hide();
				$(".contenido_solucion3").hide();
				$(".contenido_solucion4").hide();
				$(".contenido_solucion5").hide();
			});
			$("#solucion2").click(function(){
				$(".contenido_solucion5").hide();
				$(".contenido_solucion4").hide();
				$(".contenido_solucion3").hide();
				$(".contenido_solucion2").toggle();
				$(".contenido_solucion").hide();
				$(".cuadro_info").hide();
			});
			$("#solucion3").click(function(){
				$(".contenido_solucion5").hide();
				$(".contenido_solucion4").hide();
				$(".contenido_solucion3").toggle();
				$(".contenido_solucion2").hide();
				$(".contenido_solucion").hide();
				$(".cuadro_info").hide();
			});
			$("#solucion4").click(function(){
				$(".contenido_solucion5").hide();
				$(".contenido_solucion4").toggle();
				$(".contenido_solucion3").hide();
				$(".contenido_solucion2").hide();
				$(".contenido_solucion").hide();
				$(".cuadro_info").hide();
			});
			$("#solucion5").click(function(){
				$(".contenido_solucion5").toggle();
				$(".contenido_solucion4").hide();
				$(".contenido_solucion3").hide();
				$(".contenido_solucion2").hide();
				$(".contenido_solucion").hide();
				$(".cuadro_info").hide();
			});
			//-------------------------------------
			$("#boton_registrar a.cuentas_bot").click(function(){
				$(".formulario_cuentas").toggle();
				$(".formulario_edicion").hide();
			});
			//-------------------------------------
			$("#bot_edi_cuentas a").click(function(){
				$(".formulario_edicion").toggle();
				$(".formulario_cuentas").hide();
			});
			//-------------------------------------
			$("#boton_registrar a.contrato").click(function(){
				$(".formulario_contrato").toggle();			
			});
			$("a#actualizar").click(function(){
				$(".formulario_actualizar_info").toggle();			
			});
			//------------------------------------------
			$("input.boton_busca").click(function(){
				$(".contenido_solucion").toggle();

			});
			$("a#bot_editar").click(function(){
				$("form#resp_sol1").show();

			});
			//-----------------------------------------
			$("#bot_edi_cont a").click(function(){
				$(".formulario_edicion").toggle();
				$(".formulario_contrato").hide();		

			});
			$("a.contrato").click(function(){
				$(".formulario_edicion").hide();
				$(".formulario_contrato").show();		

			});
			//-----------------------------------------
			
		});
	</script>
	<!--fin script de solucion-->
</head>
<body>
	<header>
		<div class="contenedor">
			<div id="logo"></div>
			<div id="menu_sesion">
				<ul class="idiomas">
					<li><a href="sesiones_admin_ingles.php">English</a></li>
					<li class="slash">/</li>
					<li><a href="sesiones_admin.php">Spanish</a></li>
				</ul>
				<ul class="sesion">
					<?php ob_start();
					include("salida_registro.php");
					//<li id="enlace_a"><a href="#">EJEMPLO</a></li>	<!--en este li debe guardarse nombre de usuario-->				
					ob_end_flush();?>
					<li class="slash">/</li>
					<a href="log_out.php">Log out</a>
				</ul>
			</div>
		<div class="separador"></div>	
			<div class="opciones_sesion">
			<?php ob_start();
					include("solucion_comunitaria_ingles.php");
					include("solucion_contratos_ingles.php");
					include("solucion_cuentas_ingles.php");
					include("solucion_difusion_ingles.php");
					include("solucion_aprobacion_ingles.php");
				ob_end_flush();?>
				<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
			</div>
			<div class="barra_azul"></div>
		<div class="separador"></div>		
		</div>
	</header>
	<div class="contenedor">
		<section>
			<article>
				<div class="cuadro_info">
					<div class="img_perfil">
						<?php ob_start();
						include("salida_foto.php");
						ob_end_flush();?>
					</div><!--acá va la imagen del perfil del usuario-->
					<div class="info_usuario"><!--acá va la informacion del perfil del usuario-->
						<?php ob_start();
						include("salida_info.php");
						ob_end_flush();?>
					</div>
					<div class="separador"></div>
					<a id="actualizar" href="#">Update</a>
					<div class="formulario_actualizar_info">
						<form action="actualizar.php" method="post" enctype="multipart/form-data">
							<p>Names</p><input type="text" name="nombres" placeholder="" required>
							<div class="separador"></div>
							<p>E-mail</p><input type="text" name="correo" placeholder="" required>
							<div class="separador"></div>
							<p>Phone</p><input type="text" name="telefono" placeholder="" required>
							<div class="separador"></div>
							<input type="file" name="foto" size="100">
							<div class="separador"></div>
							<input id="guardar_datos" type="submit" value="save">
						</form>
					</div>
					<div class="separador"></div>
					<div class="linea_cuadro_info"></div>
				</div>
				<div class="separador"></div>
			</article>
		</section>
		<div class="separador"></div>
	</div>	
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
			<p>2015 ©COPYRIGHT Gated Community TLD. All rigths reserved.</p>
		</div>
	</footer>

	
</body>
</html>