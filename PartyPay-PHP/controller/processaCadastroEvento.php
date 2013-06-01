<?php

$nome=$_POST['nome'];
$dataInicio=$_POST['dataInicio'];
$dataTermino=$_POST['dataTermino'];
$preçoMasc=$_POST['precoMasc'];
$precoFem=$_POST['precoFem'];
$local=$_SESSION['localid'];
$facebookEventPage=$_POST['facebookEventPage'];
$descricao=$_POST['descricao'];
$numeroDeIngressos=$_POST['numeroDeIngressos'];
$horaInicio=$_POST['horaInicio'];
$horaTermino=$_POST['horaTermino'];

$evento= new Evento();

$evento->setNome($nome);
$evento->setDataInicio($dataInicio);
$evento->setDataTermino($dataTermino);
$evento->setHoraInicio($horaInicio);
$evento->setHoraTermino($horaTermino);
$evento->setNumeroIngressos($numeroDeIngressos);
$evento->setOrganizador($_SESSION['user_id']);
$evento->setPrecoFem($precoFem);
$evento->setPreçoMasc($preçoMasc);
$evento->setFacebookEventPage($facebookEventPage);
$evento->setLocal($local);
$evento->setDescricao($descricao);





?>
