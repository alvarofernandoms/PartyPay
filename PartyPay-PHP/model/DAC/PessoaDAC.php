<?php

class PessoaDAC {
    
    public static function persist($pessoa){
        include_once 'conexao.php';
        $sql="INSERT INTO pessoas(`primeiroNome`, `sobreNome`, `email`, `id`, `senha`,`sexo`,emailConfirmado,codConfirmacao) VALUES 
            ('".$pessoa->getPrimeiroNome()."','".$pessoa->getSobreNome()."','".$pessoa->getEmail()."','NULL','".$pessoa->getPassword()."','".$pessoa->getSexo()."','0','".$pessoa->getCodConfirmacao()."');";     
        mysql_query($sql)or die(mysql_error()."pessoaDAC - Persist");
        mysql_close($cn);
    }
    
    public static function updateInfo($pessoa,$atributo,$atributoNovo){
       include_once 'conexao.php';
        $sql="UPDATE `pessoas` SET `$atributo`=$atributoNovo WHERE id=".$pessoa->getId();
        mysql_query($sql)or die(mysql_error());
        mysql_close($cn);
    }
    
    public static function delete($pessoa){
        include_once 'conexao.php';
        $sql="DELETE FROM `pessoas` WHERE id=".$pessoa->getId();
        mysql_query($sql)or die(mysql_error());
        mysql_close($cn);
    }
    
    public static function recupere($pessoa,$id){
        include_once 'conexao.php';
        $sql="SELECT * FROM pessoas WHERE id=$id";
        $resultado=mysql_query($sql) or die(mysql_error());
        $row=mysql_fetch_array($resultado);
        mysql_close($cn);

        if (mysql_num_rows($resultado)==1){
           $pessoa->setPrimeiroNome($row['primeiroNome']);
           $pessoa->setSobreNome($row['SobreNome']);
           $pessoa->setEmail($row['email']);
           $pessoa->setTelefone($row['telefone']);
           $pessoa->setDataNasc($row['dataNasc']);
           $pessoa->setRg($row['rg']);
           $pessoa->setImage($row['image']);
           $pessoa->setId($row['id']);
           return 1;
        }else{
            return NULL;
        }

        
    }
 
    public static function verifiqueDispo($email){
        include_once 'conexao.php';
        $sql="SELECT email FROM pessoas WHERE email=$email";
        $result=mysql_query($sql);
        mysql_close($cn);
        if(mysql_num_rows($result)===0){
            return 1;
        }else{
            return 0;
        }
    }
 
}

?>
