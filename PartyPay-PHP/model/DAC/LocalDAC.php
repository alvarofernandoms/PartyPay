<?php

class LocalDAC {
     
    public static function persist($evento){
       include_once 'conexao.php';
        $sql="INSERT INTO `locais`(`id`, `endereco`, `coordenadasGoogleMaps`, `nome`) VALUES (NULL,".$evento->getEndereco().",".$evento->getCoordenadasGoogleMaps().",".$evento->getNome().")";
        mysql_query($sql) or die(mysql_error());
        return mysql_insert_id();
        mysql_close($cn);
        
    }
    
     public static function updateInfo($local,$atributo,$atributoNovo){
        include_once 'conexao.php';
         $sql="UPDATE `locais` SET `$atributo`=$atributoNovo WHERE id=".$local->getId();
        mysql_query($sql)or die(mysql_error());
        mysql_close($cn);
        
    }
    
    public static function delete($local){
        include_once 'conexao.php'; 
        $sql="DELETE FROM `locais` WHERE id=".$local->getId();
        mysql_query($sql)or die(mysql_error());
        mysql_close($cn);
    }
}



?>
