<section id="cuerpomenu">
<div id="tab4">
<h3 id="formcontac" >ENVIANOS TU CONSULTA</h3>
<br>
				<?php echo validation_errors('<div class="error">','</div>'); ?> 

				<div class="errores"><?= $error2 ?></div><br>
			
			    <?=form_open('consulta/registrar_consulta')?>
						        
			
				<input  class="textoinput letrafor" name="nombre" id ="nombre" placeholder="Ingrese su Nombre" type=text/><br>
								
				<input  class="textoinput letrafor" name="email"  id="email" placeholder="ejemplo@ejemplo.com" type="mail"/><br>
								
				<textarea  class="textoinput letrafor" name ="comentario" cols="40" rows="10" placeholder="Mensaje" aria-required="true"></textarea><br>
				<input  class=" textoinput buttons" name="submit" type="submit"  value="Enviar" />
				 				
 				<?= form_close()?>
</div>
</section>