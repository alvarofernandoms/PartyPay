<?php

include '../model/Pessoa.php';
include 'gerarCodConfirmacao.php';

$primeiroNome= addslashes($_POST['primeironome']);
$sobreNome=addslashes($_POST['sobreNome']);
$email=addslashes($_POST['email']);
$password=addslashes($_POST['password']);
$sexo=addslashes($_POST['sexo']);

$strList="\\\'\"&\n\r<>";
addcslashes($primeiroNome,$strList);
addcslashes($sobreNome,$strList);
addcslashes($email,$strList);
addcslashes($password,$strList);
addcslashes($sexo,$strList);



$codigo=gerarCodigoConfirmaçao();
$pessoa=new Pessoa();

    $pessoa->setEmail($email);
    $pessoa->setPrimeiroNome();
    $pessoa->setSobreNome($sobreNome);
    $pessoa->setPassword(md5($password));//criptografia md5 para o password
    $pessoa->setSexo($sexo);


$pessoa->setCodConfirmacao($codigo);
$pessoa->persist();

//header("Location:../controller/EnviarEmailConfirmacao.php?e=".$_POST['email']."&cod=".$codigo);

    

?>
