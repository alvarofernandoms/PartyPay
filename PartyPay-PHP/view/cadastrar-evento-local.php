<html>
  <head>
    <title>Novo evento - Party Pay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
		<header>
			<div class="navbar">
			  <div class="navbar-inner">
			    <a class="brand" href="#"><img src="view/img/marca-mini.png" alt="" /></a>
			    <ul class="nav">
			      <li class="active"><a href="#">Home</a></li>
			      <li><a href="#">Sobre</a></li>
			      <li><a href="#">Eventos</a></li>
			    </ul>
			  </div>
			</div>
		</header>
		<section class="container">
    		<h3>Local</h3>
			<div class="row">
				<form class="form-horizontal" method="get" action="controller/processaCadastroLocal.php">
				  <div class="control-group">
				    <label class="control-label" for="nome">Nome</label>
				    <div class="controls">
				      <input type="text" id="nome" placeholder="Nome do Local">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="endereco">Endere&ccedil;o</label>
				    <div class="controls">
				      <input type="text" id="endereco" placeholder="Endere&ccedil;o">
				    </div>
				</div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Numero</label>
				    <div class="controls">
				      <input type="text" id="numero" placeholder="Numero">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Complemento</label>
				    <div class="controls">
				      <input type="text" id="complemento" placeholder="Complemento">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Bairo</label>
				    <div class="controls">
				      <input type="text" id="bairo" placeholder="Bairo">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Cidade</label>
				    <div class="controls">
				      <input type="text" id="cidade" placeholder="Cidade">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">CEP</label>
				    <div class="controls">
				      <input type="text" id="cep" placeholder="CEP">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Pa&iacute;s</label>
				    <div class="controls">
				      <input type="text" id="pais" placeholder="Pa&iacute;s">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Estado</label>
				    <div class="controls">
				      <input type="text" id="estado" placeholder="Estado">
				    </div>
				  </div>
				  <button type="submit" class="btn btn-success">Enviar</button>
				</form>
    		</div>
		</section>
		<footer>
		</footer>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
  </body>
</html>