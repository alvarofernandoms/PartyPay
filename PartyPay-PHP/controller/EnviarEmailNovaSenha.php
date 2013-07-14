<?php
   
    $user_email = $_POST['email'];
    
    $CaracteresAceitos = 'defghABC0123456789';
    $max = strlen($CaracteresAceitos)-1;
    $novasenha = '';
    
    for($i=0; $i < 8; $i++) {
        $novasenha .= md5($CaracteresAceitos{mt_rand(0, $max)});
    }
    
    require_once '../model/DAC/conexao.php';
    $sql =  "SELECT * FROM `pessoas` WHERE email= '$user_email' ";
    $retorno = mysql_query($sql)or die(mysql_error());
    
    if(mysql_num_rows($retorno)===1){ 
    
    $sql_update = "UPDATE `pessoas` SET `senha` = '$novasenha' WHERE `pessoas`.`email` ='$user_email';";     
    mysql_query($sql_update)or die(mysql_error());

                //Assunto
                  $subject = 'PartyPay - Nova senha';

                //Mensagem
                    $message = "Sua <strong>nova</strong> senha: <strong>$novasenha</strong><br><br>";
    
                //headers adicionais agora vai
                $headers = 'From: PartyPay <no-reply@partypay.com>' . "\r\n";
    
                // Mandando o Email
                    mail($user_email, $subject, $message, $headers);
    
                echo "Uma nova senha foi enviada para seu email!";
        }else{
                echo "Desculpe! Email n&atilde;o cadastrado!";
                
    }
    mysql_close($conexao);

?>
