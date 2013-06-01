
<html>
  <head>
    <title>Novo evento - Party Pay</title>
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="view/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
		<header>
			<div class="navbar">
			  <div class="navbar-inner">
			    <a class="brand" href="#"><img src="view/img/marca-mini.png" alt="" /></a>
			    <ul class="nav">
			      <li class="active"><a href="index.php">Home</a></li>
			      <li><a href="#">Sobre</a></li>
			      <li><a href="#">Eventos</a></li>
			    </ul>
			  </div>
			</div>
		</header>
		<section class="container">
    		<h3>Local</h3>
			<div class="row">
				<form class="form-horizontal" method="post" action="controller/processaCadastroLocal.php" enctype="multipart/form-data">
				  <div class="control-group">
				    <label class="control-label" for="nome">Nome</label>
				    <div class="controls">
				      <input type="text" name="nome" placeholder="Nome do Local" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Fotos</label>
				    <div class="controls">
				      <input type="file" name="arquivo" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="endereco">Endere&ccedil;o</label>
				    <div class="controls">
				      <input type="text" name="endereco" placeholder="Endere&ccedil;o" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Numero</label>
				    <div class="controls">
				      <input type="text" id="numero" name="numero" placeholder="Numero" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Complemento</label>
				    <div class="controls">
				      <input type="text" name="complemento" placeholder="Complemento" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Bairro</label>
				    <div class="controls">
				      <input type="text" name="bairro" placeholder="Bairro" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Cidade</label>
				    <div class="controls">
				      <input type="text" name="cidade" placeholder="Cidade" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">CEP</label>
				    <div class="controls">
				      <input type="text" id="cep" name="cep" placeholder="CEP" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Pa&iacute;s</label>
				    <div class="controls">
				      <input type="text" name="pais" placeholder="Pa&iacute;s" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Estado</label>
				    <div class="controls">
				      <input type="text" name="estado" placeholder="Estado" required>
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
