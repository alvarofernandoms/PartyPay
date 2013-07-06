<?php

class EventoLocal {

    public static function persist($eventoId, $localId) {
        require 'conexao.php';
        $sql = "INSERT INTO `locaisdoseventos` (
            `id` ,
            `localID` ,
            `eventoID`
            )
            VALUES (
            NULL ,  '$localId',  '$eventoId'
            );";
        mysql_query($sql) or die(mysql_error() . "EventoLocalDAC.php inserçao de dados na tabela");
        mysql_close($conexao);
    }

}

?>
