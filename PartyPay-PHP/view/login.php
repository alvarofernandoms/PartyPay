<?php
include 'model/Pessoa.php';

session_start();

$fulano = new Pessoa;
$fulano->construaPorId($_SESSION['id']);

$primeiroNome = $fulano->getPrimeiroNome();
$sobreNome = $fulano->getSobreNome();
$email = $fulano->getEmail();
$sexo = $fulano->getSexo();
$cpf = $fulano->getCpf();
$telefone = $fulano->getTelefoneContato();
?>
<?php
if ($_SESSION['email']) {
    echo "Welcome, $primeiroNome $sobreNome. ";
    echo "Numero do id no BD: " . $_SESSION['id'];
}
else
    die("<div style='font-family: Verdana; font-size: 12px;>" . "You must be logged in!" . "</div>");
echo " | " . "<a href='http://localhost/login/change.php'>Change password</a> | <a href='http://localhost/login/change.php'>Forgot password?</a> | <a href='logout.php'>Logout<a/>" . "</div>";
?>

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
            <div id="hero" class="">
                <ul>
                    <li><img src="view/img/slide.jpg" alt="" /></li>
                </ul>
                <div class="busca">
                    <h1>O que tem de bom pra hoje?</h1>
                    <h2>Encontre eventos</h2>
                    <div class="navbar">
                        <div class="navbar-inner">
                            <form class="navbar-form pull-left">
                                <input type="text" class="span10">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="container">
            <h3>Eventos em destaque</h3>
            <div class="row">
                <ul class="thumbnails">
                    <li class="span4">
                        <a href="#" class="thumbnail">
                            <img src="view/img/3.jpg" alt="">
                        </a>
                    </li>
                    <li class="span4">
                        <a href="#" class="thumbnail">
                            <img src="view/img/1.jpg" alt="">
                        </a>
                    </li>
                    <li class="span4">
                        <a href="#" class="thumbnail">
                            <img src="view/img/2.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <ul class="thumbnails">
                    <li class="span4">
                        <a href="#" class="thumbnail">
                            <img src="view/img/4.jpg" alt="">
                        </a>
                    </li>
                    <li class="span4">
                        <a href="#" class="thumbnail">
                            <img src="view/img/5.jpg" alt="">
                        </a>
                    </li>
                    <li class="span4">
                        <a href="#" class="thumbnail">
                            <img src="view/img/6.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <footer>
        </footer>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="view/js/bootstrap.min.js"></script>
        <script src="view/js/bootstrap-responsive.min.js"></script>
    </body>
</html>
<?php require_once('footer.php'); ?>