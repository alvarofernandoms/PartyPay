<?php require_once('header.php');
	
	include 'model/Pessoa.php';

	$id = $_GET['id']; // consultar id na sessao

	$fulano = new Pessoa;
	$fulano->construaPorId($id);

	$primeiroNome = $fulano->getPrimeiroNome();
	$sobreNome = $fulano->getSobreNome();
	$email = $fulano->getEmail();
	$sexo = $fulano->getSexo();
	$cpf = $fulano->getCpf();
	$telefone = $fulano->getTelefoneContato();

?>
		<section class="container">
    		<h3>Editar dados</h3>
			<div class="row">
				<h3>"<?php echo $sexo; ?>"</h3>
				<form class="form-horizontal" method="post" action="controller/processaCadastroPessoa.php" enctype="multipart/form-data">
				  <div class="control-group">
				    <label class="control-label" for="nome">Primeiro Nome</label>
				    <div class="controls">
				      <input type="text" name="primeiroNome" placeholder="Primeiro nome" value="<?php echo $primeiroNome; ?>" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="nome">Sobrenome</label>
				    <div class="controls">
				      <input type="text" name="sobreNome" placeholder="Sobrenome"  value="<?php echo $sobreNome; ?>" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="email">email</label>
				    <div class="controls">
				      <span class="input-xlarge uneditable-input"><?php echo $email; ?></span></div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="senha">Senha</label>
				    <div class="controls">
				      <a href="#">Mudar senha</a>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="sexo">Sexo</label>

				    <div class="controls">
				    	<select name="sexo">
						  <option>Feminino</option>
						  <option>Masculino</option>
						</select>
				  	</div>

				<!-- cod confirmação -->

				  <div class="control-group">
				    <label class="control-label" for="cpf">CPF</label>
				    <div class="controls">
				      <input type="text" id="cpf" name="cpf" placeholder="CPF" value="<?php echo $cpf; ?>" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="telefoneContato">Telefone de Contato</label>
				    <div class="controls">
				      <input type="text" id="telefone" name="telefoneContato" placeholder="Telefone de Contato" value="<?php echo $telefone; ?>" required>
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