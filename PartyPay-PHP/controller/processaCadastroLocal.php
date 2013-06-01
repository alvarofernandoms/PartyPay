<?php
require_once '../model/Local.php';

    $endereço=$_POST['endereco'];
    //$coordenadaGoogleMaps = $_POST['coordenadas'];
    //$foto=
    $nome=$_POST['nome'];
    $numero= $_POST['numero'];
    $complemento=$_POST['complemento'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $cep=$_POST["cep"];
    $pais=$_POST['pais'];
    $estado=$_POST['estado'];
    
    
    $strList="\\\'\"&\n\r<>\b";
    addcslashes($endereço,$strList);
    addcslashes($nome,$strList);
    addcslashes($numero,$strList);
    addcslashes($complemento,$strList);
    addcslashes($bairro,$strList);
    addcslashes($cidade,$strList);
    addcslashes($cidade,$strList);
    addcslashes($pais,$strList);
    addcslashes($estado,$strList);
    
    $local= new Local();
    
    require_once "recebe_upload_local.php";
    
    $local->setBairro($bairro);
    $local->setCep($cep);
    $local->setCidade($cidade);
    $local->setComplemento($complemento);
    $local->setEndereço($endereço);
    $local->setNome($nome);
    $local->setNumero($numero);
    $local->setPais($pais);
    $local->setEstado($estado);
    
    $_SESSION['localid']=$local->persist();
    
    header("Location:../view/cadastroEvento.php");
 
?>
