<?php


class LocalDAC {
    

    public static function persist(Local $local) {
        include_once 'conexao.php';
        $sql = "INSERT INTO `locais`(`id`, `endereco`, `coordenadasGoogleMaps`, 
            `nome`, `numero`, `complemento`, `bairro`, `cidade`, `cep`, `pais`, 
            `fotos`, `estado`,`miniatura`) 
            VALUES (NULL,'" . $local->getEndereco() . "','"
                . $local->getCoordenadaGoogleMaps() . "','"
                . $local->getNome() . "','"
                . $local->getNumero() . "','"
                . $local->getComplemento() . "','"
                . $local->getBairro() . "','"
                . $local->getCidade() . "','"
                . $local->getCep() . "','"
                . $local->getPais() . "','"
                . $local->getFotos() . "','"
                . $local->getEstado() . "','"
                .$local->getMiniatura()."')";
        mysql_query($sql) or die(mysql_error());
        mysql_close($conexao);
        return mysql_insert_id();
    }

    public static function updateInfo(Local $local, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `locais` SET `$atributo`=$atributoNovo WHERE id=" . $local->getId();
        mysql_query($sql) or die(mysql_error());
        mysql_close($conexao);
    }

    public static function delete(Local $local) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `locais` WHERE id=" . $local->getId();
        mysql_query($sql) or die(mysql_error());
        mysql_close($conexao);
    }

}

?>
