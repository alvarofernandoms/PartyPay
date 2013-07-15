<?php

$user_email = $_POST['email'];

$CaracteresAceitos = 'ghijklmABCEF0123456789';
$max = strlen($CaracteresAceitos) - 1;
$novasenha = '';
$password = '';

for ($i = 0; $i < 8; $i++) {
    $password .= $CaracteresAceitos{mt_rand(0, $max)};
    $novasenha = md5($password);
}

$Mensagem = "Oi!\n\nEsta é a sua nova senha: $password\n";

require_once("phpmailer/class.phpmailer.php");

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {

    global $error;

    $mail = new PHPMailer();

    $mail->IsSMTP();  // Ativar SMTP
    $mail->SMTPDebug = 0;  // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
    $mail->SMTPAuth = true;  // Autenticação ativada
    $mail->SMTPSecure = 'ssl'; // SSL REQUERIDO pelo GMail
    $mail->Host = 'smtp.gmail.com'; // SMTP utilizado
    $mail->Port = 465;    // A porta 465 deverá estar aberta em seu servidor
    $mail->Username = 'partypay.eventos@gmail.com';
    $mail->Password = 'senhapartypay';
    $mail->SetFrom($de, $de_nome);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    if (!$mail->Send()) {
        $error = 'Mail error: ' . $mail->ErrorInfo;
        return false;
    } else {
        $error = 'Uma nova senha foi enviada para seu email!';
        return true;
    }
}

require_once '../model/DAC/conexao.php';

$sql = "SELECT * FROM `pessoas` WHERE email= '$user_email' ";
$retorno = mysql_query($sql) or die(mysql_error());

if (mysql_num_rows($retorno) === 1) {

    $sql_update = "UPDATE `pessoas` SET `senha` = '$novasenha' WHERE `pessoas`.`email` ='$user_email';";
    mysql_query($sql_update) or die(mysql_error());

    smtpmailer($user_email, 'partypay.eventos@gmail.com', "PartyPay", "Nova senha - PartyPay!", $Mensagem);

    if (!empty($error))
        echo $error;
}else {
    echo "Desculpe! Email n&atilde;o cadastrado!";
}
mysql_close($conexao);
?>
