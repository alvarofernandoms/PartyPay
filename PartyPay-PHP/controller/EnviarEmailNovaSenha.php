<?php
   
    $user_email = $_GET['email'];
    
    $CaracteresAceitos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $max = strlen($CaracteresAceitos)-1;
    $novasenha = null;
    
    for($i=0; $i < 8; $i++) {
        $novasenha .= md5($CaracteresAceitos{mt_rand(0, $max)});
    }
    
    require_once 'conexao.php';
    
    $sql_consulta_email =  ("SELECT * FROM `pessoas` WHERE `email` like '$user_email.' ");
    
    $retorno = mysql_query($sql_consulta_email);
    
    if($retorno){
        
    $sql_update_senha = ("UPDATE `pessoas` SET `senha`= $novasenha WHERE `email` LIKE $user_email");
            
    $retorno_update = mysql_query($sql_update_senha);
        
        if($retorno_update){

                //Assunto
                  $subject = 'PartyPay - Nova senha';

                //Mensagem
                    $message = "Sua <strong>nova</strong> senha: <strong>$novasenha</strong><br><br>";
    
                //headers adicionais
                $headers .= 'From: PartyPay <no-reply@partypay.com>' . "\r\n";
    
                // Mandando o Email
                    mail($user_email, $subject, $message, $headers);
    
                echo "Sua nova senha foi enviada para seu endereço de email!";
        }
    
    }else{
    
    echo "Este Email não esta cadastrado!";
    
    }
    mysql_close($conexao);

?>
