<?php require_once('header.php'); ?>
		<section class="container">
    		<h3>Novo Usu&aacute;rio</h3>
			<div class="row">
				<form class="form-horizontal" method="post" action="controller/processaCadastroPessoa.php" enctype="multipart/form-data">
				  <div class="control-group">
				    <label class="control-label" for="nome">Primeiro Nome</label>
				    <div class="controls">
				      <input type="text" name="primeiroNome" placeholder="Primeiro nome" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="nome">Sobrenome</label>
				    <div class="controls">
				      <input type="text" name="sobreNome" placeholder="Sobrenome" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="nome">email</label>
				    <div class="controls">
				      <input type="email" name="email" placeholder="email" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="nome">Senha</label>
				    <div class="controls">
				      <input type="password" name="password" placeholder="senha" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="nome">Sexo</label>
				    <div class="controls">
				    	<select name="sexo">
						  <option>Feminino</option>
						  <option>Masculino</option>
						</select>
				  	</div>
				  </div>

				<!-- cod confirmação -->

				  <div class="control-group">
				    <label class="control-label" for="nome">CPF</label>
				    <div class="controls">
				      <input type="text" id="cpf" name="cpf" placeholder="CPF" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="nome">Telefone de Contato</label>
				    <div class="controls">
				      <input type="text" id="telefone" name="telefoneContato" placeholder="Telefone de Contato" required>
				    </div>
				  </div>

				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" class="btn btn-success">Enviar</button>
				    </div>
				  </div>
				</form>
    		</div>
		</section>
<?php require_once('footer.php'); ?>