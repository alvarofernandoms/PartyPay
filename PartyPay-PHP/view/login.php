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

$_SESSION['primeiroNome'] = $primeiroNome;
$_SESSION['sobreNome'] = $sobreNome;
$_SESSION['email'] = $email;
$_SESSION['sexo'] = $sexo;
$_SESSION['cpf'] = $cpf;
$_SESSION['telefoneContato'] = $telefone;

header("location: index.php");
?>