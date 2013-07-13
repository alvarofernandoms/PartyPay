<?php

require_once '../model/Evento.php';

session_start();


$nome = $_POST['nome'];
$dataInicio = $_POST['dataInicio'];
$dataTermino = $_POST['dataTermino'];
$precoMasc = $_POST['precoMasc'];
$precoFem = $_POST['precoFem'];
$facebookEventPage = $_POST['facebookEventPage'];
$descricao = $_POST['descricao'];
$numeroIngressos = $_POST['numeroIngressos'];
$horaInicio = $_POST['horaInicio'];
$minutoInicio = $_POST['minutoInicio'];
$minutoTermino = $_POST['minutoTermino'];
$horaTermino = $_POST['horaTermino'];
$organizadorId = $_SESSION['id'];
$classificacao = $_POST['classificacao'];
$evento = new Evento();

require_once 'recebe_upload_evento.php';

$evento->setNome($nome);
$evento->setDataInicio($dataInicio);
$evento->setDataTermino($dataTermino);
$evento->setHoraInicio($horaInicio . ":" . $minutoInicio);
$evento->setHoraTermino($horaTermino . ":" . $minutoTermino);
$evento->setNumeroIngressos($numeroIngressos);
$evento->setOrganizador("1");
$evento->setPrecoFem($precoFem);
$evento->setPrecoMasc($precoMasc);
$evento->setFacebookEventPage($facebookEventPage);
$evento->setDescricao($descricao);
$evento->setOrganizador($organizadorId);
$evento->setClassificacao($classificacao);

$_SESSION['eventoid'] = $evento->persist();
header("Location:../cadastrar-evento-local.php");
?>
