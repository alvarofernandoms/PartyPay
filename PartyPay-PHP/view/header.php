<?php
include 'model/Pessoa.php';

session_start();

if (isset($_SESSION['id'])) {


$primeiroNome = $_SESSION['primeiroNome'];
$sobreNome = $_SESSION['sobreNome'];
$email = $_SESSION['email'];
$sexo = $_SESSION['sexo'];
$cpf = $_SESSION['cpf'];
$telefone = $_SESSION['telefoneContato'];

} ?>
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
			      <?php if (!isset($_SESSION['id'])) { ?>
                              <li><a href="#myModal" data-toggle="modal">Entrar</a</li>
                              <li><a href="cadastrarPessoa.php">Sign up</a></li>
                              <?php } else{}?>
			    </ul>
			    <a class="btn btn-success pull-right" href="cadastrarEvento.php">Divulgar seu evento</a>
				<?php
					if (isset($_SESSION['id'])) { ?>
				<div id="usuario" class="btn-group pull-right">
				  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					   <?php  echo "$primeiroNome $sobreNome"; ?>
					</button>
				    <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
				  	<li><a href="editarPessoa.php">Editar cadastro</a></li>
				  	<li><a href="logout.php">Sair</a></li>
				  </ul>
				</div>
				<?php } else{}?>
			  </div>
			  <!-- Modal -->
				<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">x</button>
				    <h3>Login</h3>
				  </div>
				  <div class="modal-body">
				    <form method="post" action="controller/processaLogin.php" name="login_form">
				      <p><input type="text" class="span3" name="email" id="email" placeholder="Email"></p>
				      <p><input type="password" class="span3" name="password" placeholder="password"></p>
				      <p><button type="submit" class="btn btn-primary">Entrar</button>
				        <a href="#">Esqueci a senha</a>
				      </p>
				    </form>
				  </div>
				  <div class="modal-footer">
				    N&atilde;o tem conta?
				    <a href="#" class="btn btn-primary">Registrar</a>
				  </div>
				</div>
			</div>
		</header>