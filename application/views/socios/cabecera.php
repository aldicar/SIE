<!doctype html>
<html lang ="es">
	<head>
		<title>siesrl</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="<?=base_url()?>css/style.css"/>
		
		<link rel="stylesheet" href="<?=base_url()?>css/menu.css"/>
		<link rel="stylesheet" href="<?=base_url()?>css/logousuario.css"/>
		<link rel="stylesheet" href="<?=base_url()?>css/tablasusuarios.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script scr="js/modernizr.custom.03036.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
		<script>
		$(document).ready(function() {
				var menu 		= $('nav ul');
					menuHeight	= menu.height();

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
		<section id="todo">	
			<header>
				
				<div class="cabecraconteuno" id="contelogo">
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
				</div>
				
				<div id="iniciose"><br>
					<nav class="menu">
						<ul class="menu">
					 		<li class="letrasocioini"> <?=anchor("usuarios/salir",'Salir')?></li><br><br>
				  	 		<li class="letrasocioini" > <?=anchor("usuarios/cambio_contra",'Cambio')?></li>
				  	 	</ul>
				  	 </nav>
				 </div>
								
			</header> 

			
			
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
			

				<!--section class="cuerpo">

				</section-->
			</nav>

