<?php

include '../model/Pessoa.php';
include '../tratamentoDeExcecao/ValidaCadastro.php';
include 'gerarCodConfirmacao.php';


session_start('login');

$primeiroNome= addslashes($_POST['primeiroNome']);
$sobreNome=addslashes($_POST['sobreNome']);
$sexo=addslashes($_POST['sexo']);
$cpf=addslashes($_POST['cpf']);
$telefoneContato=addslashes($_POST['telefoneContato']);
$id=$_SESSION['id'];

$strList="\\\'\"&\n\r<>";
addcslashes($primeiroNome,$strList);
addcslashes($sobreNome,$strList);
addcslashes($sexo,$strList);
addcslashes($cpf,$strList);
addcslashes($telefoneContato,$strList);

//Validação comentada para rodar no localhost
//$validator= new ValidaCadastro();
//$validator->validarEmail($email);
//inclua aqui o resto das chamadas dos metodos de validaçao;
//$mensagem=$validator->msg;
//echo "<script>alert('$mensagem');</script>";


$codigo = gerarCodigoConfirmaçao();
$pessoa = new Pessoa();


$pessoa->setPrimeiroNome($primeiroNome);
$pessoa->setSobreNome($sobreNome);
$pessoa->setSexo($sexo);
$pessoa->setCpf($cpf);
$pessoa->setTelefoneContato($telefoneContato);
$pessoa->setId($id);


$pessoa->setCodConfirmacao($codigo);
//$pessoa->updateInfo("sobreNome", "sobreNome");

$pessoa->atualizar();


echo "efetuado com sucesso ".$id;
// header("Location:../controller/EnviarEmailConfirmacao.php?e=".$_POST['email']."&cod=".$codigo);
header("Location: ../editarPessoa.php");


