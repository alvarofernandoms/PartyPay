<?php

class EventoDAC {
    
    public static function persist(Evento $evento){
        include_once 'conexao.php';
        $sql="INSERT INTO `eventos`(`nome`, 
            `dataInicio`, `dataTermino`, `imagem`,
            `precoMasc`, `precoFem`, `organizadorID`,
            `facebookEventPage`, `id`,
            `dataCriacao`, `descricao`, `numeroIngressos`,
            `horaInicio`, `horaTermino`, `miniatura`,`classificacao`) VALUES ('";
        $sql.=$evento->getNome()."','";
        $sql.=$evento->getDataInicio()."','";
        $sql.=$evento->getDataTermino()."','";
        $sql.=$evento->getImagem()."','";
        $sql.=$evento->getPrecoMasc()."','";
        $sql.=$evento->getPrecoFem()."','";
        $sql.=$evento->getOrganizador()."','";
        $sql.=$evento->getFacebookEventPage()."', NULL,'";
        $sql.=$evento->getDataCriacao()."','";
        $sql.=$evento->getDescricao()."','";
        $sql.=$evento->getNumeroIngressos()."','";
        $sql.=$evento->getHoraInicio()."','";
        $sql.=$evento->getHoraTermino()."','";
        $sql.=$evento->getMiniatura()."','";
        $sql.=$evento->getClassificacao()."');";
        
        mysql_query($sql) or die(mysql_error());
        
       
        $RES=mysql_query("SELECT LAST_INSERT_ID()");
        $mat=mysql_fetch_array($RES);
        mysql_close($conexao);
        
        return $mat['0'];
    }
    
     public static function updateInfo($evento,$atributo,$atributoNovo){
         include_once 'conexao.php';
         $sql="UPDATE `eventos` SET `$atributo`=$atributoNovo WHERE id=".$evento->getId();
        mysql_query($sql)or die(mysql_error());
        mysql_close($conexao);
    }
    
    public static function delete($evento){
        include_once 'conexao.php'; 
        $sql="DELETE FROM `eventos` WHERE id=".$evento->getId();
        mysql_query($sql)or die(mysql_error());
        mysql_close($conexao);
    }
}

?>
