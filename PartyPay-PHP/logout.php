<?php

session_start();
session_destroy(); //pei!!! destruimos a sessão ;)
session_unset(); //limpamos as variaveis bais das sessões

header("location: index.php");
?>