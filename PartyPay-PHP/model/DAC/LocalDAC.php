<?php

class LocalDAC {

    public static function persist($local) {
        include_once 'conexao.php';
        $sql = "INSERT INTO `locais`(`id`, `endereco`, `coordenadasGoogleMaps`, 
            `nome`, `numero`, `complemento`, `bairro`, `cidade`, `cep`, `pais`, 
            `fotos`, `estado`) 
            VALUES (NULL," . $local->getEndereco() . ","
                . $local->getCoordenadasGoogleMaps() . ","
                . $local->getNome() . ","
                . $local->getNumero() . ","
                . $local->getComplemento() . ","
                . $local->getBairro() . ","
                . $local->getCidade() . ","
                . $local->getCep() . ","
                . $local->getPais() . ","
                . $local->getFotos() . ","
                . $local->getEstado() . ")";
        mysql_query($sql) or die(mysql_error());
        return mysql_insert_id();
        mysql_close($cn);
    }

    public static function updateInfo($local, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `locais` SET `$atributo`=$atributoNovo WHERE id=" . $local->getId();
        mysql_query($sql) or die(mysql_error());
        mysql_close($cn);
    }

    public static function delete($local) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `locais` WHERE id=" . $local->getId();
        mysql_query($sql) or die(mysql_error());
        mysql_close($cn);
    }

}

?>
