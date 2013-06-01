<?php

$server='localhost';
$db='payparty';
$user='root';
$password='zarref';

$conexao=  mysql_connect($server, $user, $password);
@mysql_select_db ($db) OR DIE ("Banco não encontrado.");
?>
