<h3 id="formcontac" >ENVIANOS TU CONSULTA</h3>
<br>
				<?php echo validation_errors('<div class="errors">','</div>'); ?> 

				<div class="errors"><?= $error2 ?></div><br><br><br>
			
			    <?=form_open('consulta/registrar_consulta')?>
						        
			
				<input  class="textoinput letrafor" name="nombre" id ="nombre" placeholder="Ingrese su Nombre" type=text/><br>
								
				<input  class="textoinput letrafor" name="email"  id="email" placeholder="Ingrese su Email" type="text"/><br>
								
				<textarea  class="textoinput letrafor" name ="comentario" cols="40" rows="10" placeholder="Mensaje" aria-required="true"></textarea><br><br>
				<input  class=" textoinput button" name="submit" type="submit"  value="Enviar" />
				 				
 				<?= form_close()?>