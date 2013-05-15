<!doctype html>
<html lang ="es">
	<head>
		<title>siesrl</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="<?=base_url()?>css/style.css"/>
		<link rel="stylesheet" href="<?=base_url()?>css/menu.css"/>
		<link rel="stylesheet" href="<?=base_url()?>css/logousuario.css"/>
		<link rel="stylesheet" href="<?=base_url()?>css/ventanamodal.css"/>
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
				<div id="mensaje">
						<img class="imagenes" id="imagen1">
						<img class="imagenes" id="imagen2">
						<img class="imagenes" id="imagen3">
				</div>
				
				<!--div class="cabecraconte" id="iniciose">

					  <label for="sesion" id="labeluno" class="inicioss">Inicio Sesión</label>
						 
						 <?=form_open('usuarios/logued')?>
						 <input id ="usuario" class="inicioss" name="usuario" type="usuario" placeholder="usuario" required />
						 <input id ="password" class="inicioss" name="password" type=password placeholder="contraseña" required />
						 
						 <?= form_submit(array('name'=>'guardar', 'value'=>'Entrar', 'class'=>'buttonsend'))?>
						 <?= form_close()?>

				</div> 
				 <div class="errors"><?= $error ?></div-->
								
			</header> 


			<a  id="passwordmodal" title="Cambiar contraseña" href="#example2" >like</a>
			
			
			<nav class="menu">
				<ul class="menu">
					<li><?=anchor('inicio','Inicio')?></li>
					<li><?=anchor('inicio/nosotros','Nosotros')?></li>
					<li><?=anchor('inicio/servicios','Servicios')?></li>
					<li><?=anchor('inicio/temas','Temas y cursos')?></li>
					<li><?=anchor('inicio/contacto','Contactos')?></li>
				</ul>
				<a href="#" id="menuflotante">Menu</a>
			</nav>
