<?php
require_once '../model/Local.php';


    $endereco=$_POST['endereco'];
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
    $idEvento=$_SESSION['eventoid'];
    
    
    $strList="\\\'\"&\n\r<>\b";
    addcslashes($endereco,$strList);
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
    $local->setEndereco($endereco);
    $local->setNome($nome);
    $local->setNumero($numero);
    $local->setPais($pais);
    $local->setEstado($estado);
    
    $localId=$local->persist();
    
    EventoLocal::persist($idEvento, $localId);
    
    echo "cadastro efetuado";
 
?>
