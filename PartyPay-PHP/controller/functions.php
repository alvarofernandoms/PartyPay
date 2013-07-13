<?php

    function the_nome($id){
    	include "model/Evento.php";
    	   
    	$eventod = new Evento;
		$eventod->eventoPorId($id);
		return $eventod->getNome();
    }
    function ultimoEvento(){
        $mysqli = new mysqli("localhost", "root", "", "payparty"); 
        $result = $mysqli->query("SELECT MAX(id) FROM eventos");
        $row = $result->fetch_array(MYSQLI_NUM);
        return $row[0];
    }


?>
