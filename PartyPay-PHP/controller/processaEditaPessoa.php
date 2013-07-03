<?php

include '../model/Pessoa.php';
include '../tratamentoDeExcecao/ValidaCadastro.php';
include 'gerarCodConfirmacao.php';

$primeiroNome= addslashes($_POST['primeiroNome']);
$sobreNome=addslashes($_POST['sobreNome']);
$sexo=addslashes($_POST['sexo']);
$cpf=addslashes($_POST['cpf']);
$telefoneContato=addslashes($_POST['telefoneContato']);

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
$pessoa->setId(3);


$pessoa->setCodConfirmacao($codigo);
$pessoa->updateInfo("sobreNome", "sobreNome");


echo "efetuado com sucesso";
// header("Location:../controller/EnviarEmailConfirmacao.php?e=".$_POST['email']."&cod=".$codigo);
header("Location: ../editarPessoa.php");


