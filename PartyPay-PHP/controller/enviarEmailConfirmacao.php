
<?php

include 'gerarCodConfirmacao.php';
// multiple recipients
$to = $_GET['email'];
$cod = $_GET['cod'];

// subject
$subject = 'PartyPay - Confirmação de Usuário';

// message
$message = '
<html>
<head>
  <title>Confirme seu cadastro no PartyPay!</title>
</head>
<body>
  <p>Clique <a href="http://www.partypay.webuda.com/controller/verify.php?op=' . $cod . '&e=' . $to . '">aqui</a> para confirmar seu cadastro</p>
 
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers = 'From: PartyPay <no-reply@partypay.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
?>
