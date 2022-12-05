<?php
	include "cabecalho.php";
?>
	<section>
				 <fieldset>
					<legend>Registre seu contato:</legend>
					<form>

						<h1>Entre em contato</h1>
					
						<label for="nome">Nome:</label>
						<input type="text" id="nome" placeholder="Erica Camila" required="required" name="nome" />
						
						<label for="fone">Telefone:</label>
						<input type="tel" id="fone" placeholder="(99)99999-9999" name="fone" />
						
						<label for="email">Email:</label>
						<input type="email" id="email" placeholder="fulano@mail.com" name="email" />

						<textarea placeholder="Deixe sua mensagem"></textarea>

						<input type="submit" value="Enviar"class="enviar"/>	
					</form>
				</fieldset>
			</section>
<?php
	include "rodape.php";
?>