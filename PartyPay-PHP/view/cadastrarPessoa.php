<!DOCTYPE html>
<html>
  <head>
    <title>Party Pay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="view/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="view/css/style.css" rel="stylesheet" media="screen">
  </head>
  <body>
		<header>
			<div class="navbar">
			  <div class="navbar-inner">
			    <a class="brand" href="index.php"><img src="view/img/marca-mini.png" alt="" /></a>
			    <ul class="nav">
			      <li class="active"><a href="index.php">Home</a></li>
			      <li><a href="#">Sobre</a></li>
			      <li><a href="cadastrarPessoa.php">Sign up</a></li>
			    </ul>
			    <a class="btn btn-success" href="cadastrarEvento.php">Divulgar seu evento</a>
			  </div>
			</div>
		</header>
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
				    	<div class="btn-group" data-toggle="buttons-radio">
							<label>Masculino</label><input type="radio" name="sexo" value="masculino" /><br />
                        	<label>Feminino</label><input type="radio" name="sexo" value="feminino" /><br />
                        </div>
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
		<footer>
		</footer>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/bootstrap-responsive.min.js"></script>
    <script src="view/js/jquery.maskedinput.min.js"></script>

  </body>
</html>
