<?php

require_once 'model/Evento.php';

    
    function the_nome($id){        
        $evento = new Evento;
        $evento->eventoPorId($id);
        echo $evento->getNome();
    }

    function the_miniatura($id){        
        $eventod = new Evento;
        $eventod->eventoPorId($id);
        echo $eventod->getMiniatura();
    }

    function the_descricao($id){        
        $event = new Evento;
        $event->eventoPorId($id);
        echo $event->getDescricao();
    }

    function the_imagem($id){        
        $evento = new Evento;
        $evento->eventoPorId($id);
        echo $evento->getImagem();
    }


    function ultimoEvento(){
        $mysqli = new mysqli("localhost", "root", "", "payparty"); 
        $result = $mysqli->query("SELECT MAX(id) FROM eventos");
        $row = $result->fetch_array(MYSQLI_NUM);
        return $row[0];
    }

?>
