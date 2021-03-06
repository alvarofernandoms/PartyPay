<?php

include '../model/Pessoa.php';
include '../tratamentoDeExcecao/ValidaCadastro.php';
include 'gerarCodConfirmacao.php';

$primeiroNome = addslashes($_POST['primeiroNome']);
$sobreNome = addslashes($_POST['sobreNome']);
$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);
$sexo = addslashes($_POST['sexo']);
$cpf = addslashes($_POST['cpf']);
$telefoneContato = addslashes($_POST['telefoneContato']);

$strList = "\\\'\"&\n\r<>";
addcslashes($primeiroNome, $strList);
addcslashes($sobreNome, $strList);
addcslashes($email, $strList);
addcslashes($password, $strList);
addcslashes($sexo, $strList);
addcslashes($cpf, $strList);
addcslashes($telefoneContato, $strList);

//Validação comentada para rodar no localhost
$validator = new ValidaCadastro();
$validator->validarEmail($email);
$validator->validarTelefone($telefoneContato);
$validator->validarCpf($cpf);

//inclua aqui o resto das chamadas dos metodos de validaçao;
//echo "<script>alert('$mensagem');</script>";


$codigo = gerarCodigoConfirmaçao();
$pessoa = new Pessoa();


$pessoa->setEmail($email);
$pessoa->setPrimeiroNome($primeiroNome);
$pessoa->setSobreNome($sobreNome);
$pessoa->setPassword(md5($password)); //criptografia md5 para o password
$pessoa->setSexo($sexo);
$pessoa->setCpf($cpf);
$pessoa->setTelefoneContato($telefoneContato);


$pessoa->setCodConfirmacao($codigo);
$pessoa->persist();
echo "efetuado com sucesso";
// header("Location:../controller/EnviarEmailConfirmacao.php?e=".$_POST['email']."&cod=".$codigo);
header("Location: ../login.php");

session_start();

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

header("location: processaLogin.php");
?>
