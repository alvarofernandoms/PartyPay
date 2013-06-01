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
				      <input type="text" name="nome" placeholder="Nome do Local" requised>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Fotos</label>
				    <div class="controls">
				      <input type="file" name="arquivo" requised>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="endereco">Endere&ccedil;o</label>
				    <div class="controls">
				      <input type="text" name="endereco" placeholder="Endere&ccedil;o" requised>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Numero</label>
				    <div class="controls">
				      <input type="text" name="numero" placeholder="Numero" requised>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Complemento</label>
				    <div class="controls">
				      <input type="text" name="complemento" placeholder="Complemento" requised>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Bairro</label>
				    <div class="controls">
				      <input type="text" name="bairro" placeholder="Bairro" requised>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Cidade</label>
				    <div class="controls">
				      <input type="text" name="cidade" placeholder="Cidade" requised>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">CEP</label>
				    <div class="controls">
				      <input type="text" name="cep" placeholder="CEP" requised>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Pa&iacute;s</label>
				    <div class="controls">
				      <input type="text" name="pais" placeholder="Pa&iacute;s" requised>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Estado</label>
				    <div class="controls">
				      <input type="text" name="estado" placeholder="Estado" requised>
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
  </body>
</html>