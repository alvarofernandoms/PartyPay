<?php

    function ultimoEvento(){
        include 'model/DAC/conexao.php';
        $sql = "SELECT `id` FROM `eventos` ORDER BY `id` DESC LIMIT 1";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);
        mysql_close($conexao);

        $id =  $row['id'];
        settype($id, 'int');

        return $id;

    }

    function the_nome($id){
    	include "model/Evento.php";
    	
    	$evento = new Evento;
		$evento->eventoPorId($id);
		return $evento->getNome();
    }

?>
