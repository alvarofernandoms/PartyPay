<?php

include '../model/Pessoa.php';
include '../tratamentoDeExcecao/ValidaCadastro.php';
include 'gerarCodConfirmacao.php';

// Nesta parte do código pode ser utilzado o arquivo conexao.php
// Eu só não sei como! HuEHEhEHueheu! BR? BR? BR!
$host = "localhost"; // Host name 
$username = "root"; // Mysql username - MUDE AQUI O USERNAME DO SEU MYSQL
$password = "123456"; // Mysql password - MUDE AQUI A SENHA DO SEU MYSQL
$db_name = "payparty"; // Nome do Banco de Dados
$tbl_name = "pessoas"; // Nome da Tabela

// Conexão com o server e com o Banco de dados.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("Banco não encontrado.");

// email e password da FORM que vem do index.php
$email = addslashes($_POST['email']);
$mypassword = addslashes($_POST['password']);
$encrypted_mypassword = md5($mypassword);

// Não faço ideia o pq de usar addslashes, mas...
$strList = "\\\'\"&\n\r<>";
addcslashes($email, $strList);
addcslashes($mypassword, $strList);

// Para proteger de MySQL injection
$email = stripslashes($email);
$mypassword = stripslashes($mypassword);
$email = mysql_real_escape_string($email);
$mypassword = mysql_real_escape_string($mypassword);
$sql = "SELECT * FROM $tbl_name WHERE email='$email' and senha='$encrypted_mypassword'";
$result = mysql_query($sql);

// Mysql_num_row é para contar o número de linhas na tabela
$count = mysql_num_rows($result);

// Se o resuldado bater com o $email e o $mypassword, têm que haver uma linha no BD
if ($count == 1) {

// Registra $email, $mypassword e direciona para o arquivo "login_success.php"
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $mypassword;
    header("location:login_success.php");
} else {
    echo "Wrong Username or Password";
}
ob_end_flush();
?>