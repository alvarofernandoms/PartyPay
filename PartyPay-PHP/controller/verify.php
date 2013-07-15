<?php

$op_codigo_verificador = $_GET['op'];
$user_email = $_GET['email'];

require_once '../model/DAC/conexao.php';

$sql_update_emailConfirmado = "UPDATE `pessoas` SET `emailConfirmado`=true WHERE `email`= '$user_email' AND `codConfirmacao`= '$op_codigo_verificador'";

$retorno = mysql_query($sql_update_emailConfirmado) or die(mysql_error());

if (!$retorno)
    echo "Cadastro confirmado!";

mysql_close($conexao);
?>
