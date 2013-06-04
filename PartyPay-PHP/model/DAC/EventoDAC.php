<?php

class EventoDAC {
    
    public static function persist(Evento $evento){
        include_once 'conexao.php';
        $sql="INSERT INTO `eventos`(`nome`, 
            `dataInicio`, `dataTermino`, `imagem`,
            `precoMasc`, `precoFem`, `organizadorID`,
            `localID`, `facebookEventPage`, `id`,
            `dataCriacao`, `descricao`, `numeroIngressos`,
            `horaInicio`, `horaTermino`, `miniatura`,) VALUES (";
        $sql.=$evento->getNome().",";
        $sql.=$evento->getDataInicio().",";
        $sql.=$evento->getDataTermino().",";
        $sql.=$evento->getImage().",";
        $sql.=$evento->getPrecoMasc().",";
        $sql.=$evento->getPrecoFem().",";
        $sql.=$evento->getOrganizador()->getId().",";
        $sql.=$evento->getLocal()->getId().",";
        $sql.=$evento->getFacebookEventPage().", NULL,";
        $sql.=$evento->getDataCriacao().",";
        $sql.=$evento->getDescricao().")";
        $sql.=$evento->getnumeroIngressos().",";
        $sql.=$evento->gethoraInicio().",";
        $sql.=$evento->gethoraTermino().",";
        $sql.=$evento->getminiatura().",";
        
        mysql_query($sql) or die(mysql_error());
        mysql_close($cn);
    }
    
     public static function updateInfo($evento,$atributo,$atributoNovo){
         include_once 'conexao.php';
         $sql="UPDATE `eventos` SET `$atributo`=$atributoNovo WHERE id=".$evento->getId();
        mysql_query($sql)or die(mysql_error());
        mysql_close($cn);
    }
    
    public static function delete($evento){
        include_once 'conexao.php'; 
        $sql="DELETE FROM `eventos` WHERE id=".$evento->getId();
        mysql_query($sql)or die(mysql_error());
        mysql_close($cn);
    }
}

?>
