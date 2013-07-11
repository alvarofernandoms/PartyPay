<?php

class PessoaDAC {

    public static function persist($pessoa) {

        include_once 'conexao.php';
        $sql = "INSERT INTO pessoas(`primeiroNome`, `sobreNome`, `email`, `senha`,`sexo`,emailConfirmado,codConfirmacao) VALUES 
            ('" . $pessoa->getPrimeiroNome() . "','" . $pessoa->getSobreNome() . "','" . $pessoa->getEmail() . "','" . $pessoa->getPassword() . "','" . $pessoa->getSexo() . "','0','" . $pessoa->getCodConfirmacao() . "');";
        mysql_query($sql) or die(mysql_error() . "pessoaDAC - Persist");
        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);

        return $mat['0'];
    }

    public static function updateInfo(Pessoa $pessoa, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `pessoas` SET `$atributo`=$atributoNovo WHERE id=" . $pessoa->getId();
        mysql_query($sql) or die(mysql_error());
        mysql_close($conexao);
    }

    public static function delete($pessoa) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `pessoas` WHERE id=" . $pessoa->getId();
        mysql_query($sql) or die(mysql_error());
        mysql_close($conexao);
    }

    public static function recupere($pessoa, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM pessoas WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);
        mysql_close($conexao);

        if (mysql_num_rows($resultado) == 1) {
            $pessoa->setPrimeiroNome($row['primeiroNome']);
            $pessoa->setSobreNome($row['SobreNome']);
            $pessoa->setEmail($row['email']);
            $pessoa->setTelefone($row['telefone']);
            $pessoa->setDataNasc($row['dataNasc']);
            $pessoa->setRg($row['rg']);
            $pessoa->setImage($row['image']);
            $pessoa->setId($row['id']);
            return 1;
        } else {
            return NULL;
        }
    }

    public static function verifiqueDispo($email) {
        include_once 'conexao.php';
        $sql = "SELECT email FROM pessoas WHERE email=$email";
        $result = mysql_query($sql);
        mysql_close($conexao);
        if ($result == 0) {
            return 1;
        } else {
            return 0;
        }
    }

}

?>
