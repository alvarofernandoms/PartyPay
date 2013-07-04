<?php

$server='localhost';
$db='payparty';
//MODIFIQUE AQUI O USER.NAME E A SENHA DO SEU MYSQL
$user='root';
$password='';

$conexao=  mysql_connect($server, $user, $password);
@mysql_select_db ($db) OR DIE ("Banco não encontrado.");
?>
