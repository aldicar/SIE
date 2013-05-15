<!doctype html>
<html lang ="es">
	<head>
		<title>siesrl</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="<?=base_url()?>css/style.css"/>
		<link rel="stylesheet" href="<?=base_url()?>css/ventanamodal.css"/>
		<link rel="stylesheet" href="<?=base_url()?>css/menu.css"/>
		<link rel="stylesheet" href="<?=base_url()?>css/logousuario.css"/>
		<link rel="stylesheet" href="<?=base_url()?>css/tablasusuarios.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/modernizr.custom.03036.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
		<script>
		$(document).ready(function() {
				var menuflotante 		= $('#menuflotante');
					menu 		= $('nav ul');
					menuHeight	= menu.height();

				$(menuflotante).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});

				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
	    	});
	</script>
	</head>
		
		<body>
		<section id="contecuerpo">	
			<header>
				<div class="cabecraconteuno" id="contelogo">
	
				</div>
				<!--div class="cabecraconteuno" id="contelogo">
						<div id ="soluciones2">
								<h3 class="nombres">Soluciones</br>
								Inteligentes</br>Empresariales</h3>
						</div>
						<div id="logo1" class="logos"></div>
						<div id="logo2" class="logos"></div>
						<div id="logo3" class="logos"><p id="letralogo">SIE</p></div>
						<div id="lema">Trabajando por un mejor futuro tecnológico</div>
					
				</div>
			
				<div class="cabecraconte" id="mensaje">
						<img class="imagenes" id="imagen1">
						<img class="imagenes" id="imagen2">
						<img class="imagenes" id="imagen3">
				</div++-->
				
				<div id="iniciose"><br>
					<nav class="menu">
						<ul class="menu">
					 		<li class="letrasocioini"> <?=anchor("usuarios/salir",'Salir')?></li><br><br>
				  	 		<li class="letrasocioini" > <?=anchor("usuarios/cambio_contra",'Cambio')?></li>
				  	 	</ul>
				  	 </nav>
				 </div>
								
			</header> 

			
			<a  id="passwordmodal" title="Cambiar contraseña" href="#example2" >Olvidaste tu contraseña?</a>
			<aside id="example2" class="modal">
					<div>
						<h2 class="letrasmodal">Cambiar contraseña</h2>
							<section id="flotante">
								
								<div class="errors"><?= $error2 ?></div>
								<?php echo validation_errors('<div class="errors">','</div>'); ?>
								 <?=form_open('usuarios/olvide_contra')?>
									 <label class="labelmodal">Email : </label>
							 		<input id ="usuariomodal" class="inicios inputmodal" name="usuariosas" type="usuario" placeholder="Ingrese su Direccion Email" required /><br>
							 
					 
					               <?= form_submit(array('name'=>'enviar', 'value'=>'Enviar','class'=>'botonmodal'))?>
					 
					               <?= form_close()?>
						
								
							</section>
						<a href="#close" title="CERRAR">Cerrar</a>
					</div>
			</aside>
			<nav class="menu">	
				<ul class="menu">
				 <li>
				     <?=anchor("socios",'Inicio')?>
				  </li>
				 <li>
				     <?=anchor("consulta/lista_consulta",'Lista de consultas')?>
				    
				  </li>
				  <li>
				    
				    <?=anchor('reuniones','Lista de reuniones')?>
				    
				  </li>
				  <li>
				    
				    <?=anchor('empresas','Lista de empresas')?>
				    
				  </li>
				   

				</ul>
				<a href="#" id="menuflotante">Menu</a>
			</nav>

