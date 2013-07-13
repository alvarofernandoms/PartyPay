<?php

$op_codigo_verificador = $_GET['op'];
$user_email = $_GET['email'];

    require_once 'conexao.php';
	
    $sql_update_emailConfirmado = ("UPDATE 'pessoas' SET 'emailConfirmado'=true WHERE 'email' LIKE $user_email AND 'codConfirmacao' LIKE $op_codigo_verificador");
	
    $retorno = mysql_query($sql_update_emailConfirmado);
	
    if(!$retorno) echo "Cadastro confirmado!";
    
    mysql_close($conexao);
?>
