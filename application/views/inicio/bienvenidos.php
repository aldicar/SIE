	<!--TODO ESTO ES EL MENU Y EL CUERPO-->
	<nav class="menu">
		<ul class="menu">
			<li><a href="#" title="tab1">Home</a></li>
			<li><a href="#" title="tab2">Servicios</a></li>
			<li><a href="#" title="tab3">Temas y Cursos</a></li>
			<li><a href="#" title="tab4">Contactos</a></li>
		</ul>
		<a href="#" id="menuflotante">Menu</a>
	</nav>
	<section id="cuerpomenu">
    	<div id="tab1">
            <h3>MISIÓN</h3>
            <p>Es misión de S.I.E. Ofrecer soluciones tecnológicas innovadoras, 
            	de acuerdo a las necesidades específicas de cada cliente ofreciéndoles 
            	soluciones integrales con la finalidad de crear o desarrollar software 
            	de fácil uso, que tenga sobresalientes niveles de rentabilidad, calidad, 
            	presencia e influencia en el mercado laboral, además de fomentar su 
            	desarrollo y crecimiento, mediante un equipo de profesionales en tecnologías 
            	de información altamente competitivo.
            </p>
            <h3>VISIÓN</h3>
            <p>¿Cómo  nos  vemos en el futuro?</br></br>
            	Es la pregunta que nos inspira día a día para trabajar por un mejor futuro tecnológico. Pero sin duda para el futuro tenemos una gran visión
               	ser empresa líder, modelo de desarrollo y aplicación de herramientas de tecnología informática;
               	sólida, rentable y en permanente evolución. Y estar comprometidos con los problemas de nuestros clientes de forma 
               	transparentey eficaz para convertirnos en su socio de confianza. 
            </p>
    	</div>
    	<div id="tab2">
    		<h3>OFRECEMOS LOS SERVICIOS DE:...</h3>
			<p>Desarrollo Web, <br/>
				Desarrollo Aplicaciones  Móviles, <br/>
				Tecnologías Microsoft, <br/>
				Aplicaciones de la Nanotecnología, <br/>
				Visión Artificial, <br/>
				Sistemas de Reconocimiento de voz, <br/> 
				Diseño Grafico, Ciencia, <br/>
				Tecnología, Learning, <br/>
				Redes, Soporte Técnico.
			<p/>
    	</div>
    	<div id="tab3">
    		<h3>OFRECEMOS CURSOS DE:...</h3>
			<p>Html5<br />
			    Css3<br />
			    Jquery<br />
			    CodeIgneiter<br />
			    Ruby On Rails<br />
			    Django<br />
			    Python...
			</p>
    	</div>
    	<div id="tab4">
    		<h3 id="formcontac">ENVIANOS TU CONSULTA</h3>
				<?php echo validation_errors('<div class="errors">','</div>'); ?> <br>
			
			    <?=form_open('consulta/registrar_consulta')?>
						        
			
				<input  class="textoinput" name="nombre" id ="nombre" placeholder="Ingrese su Nombre" type=text/><br>
								
				<input  class="textoinput" name="email"  id="email" placeholder="Ingrese su Email" type="text"/><br>
								
				<textarea  class="textoinput" name ="comentario" cols="40" rows="10" placeholder="Mensaje" aria-required="true"></textarea><br><br>
				<input  class=" textoinput button" name="submit" type="submit"  value="Enviar" />
				 				
 				<?= form_close()?>
    	</div>
	</section>