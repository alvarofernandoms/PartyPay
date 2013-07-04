<?php
include 'gerarCodConfirmacao.php';
// multiple recipients
$to  = $_GET['email'] ;
$cod = $_GET['cod'];

//Assunto
$subject = 'PartyPay - Confirmação de Usuário';

//Mensagem
$message = '
<html>
<head>
  <title>Confirme seu cadastro no PartyPay!</title>
</head>
<body>
  <p>Clique <a href="http://www.partypay.com/controller/verify.php?op='.$cod.'&email='.$to.'">aqui</a> para confirmar seu cadastro!</p>
 
</body>
</html>
';

// header sendo definido para enviar Email HTML
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//headers adicionais
$headers .= 'From: PartyPay <no-reply@partypay.com>' . "\r\n";

// Mandando o Email
mail($to, $subject, $message, $headers);

?>
