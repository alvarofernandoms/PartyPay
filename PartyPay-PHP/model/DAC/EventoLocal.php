<?php

class EventoLocal{
    
    public static function persist($eventoId,$localId){
        require_once 'conexao.php';
        $sql="INSERT INTO  `payparty`.`locaisdoseventos` (
            `id` ,
            `localID` ,
            `eventoID`
            )
            VALUES (
            NULL ,  '$localId',  '$eventoId'
            );";
        mysql_query($sql) or die(mysql_error());
        
    }
    
}
?>
