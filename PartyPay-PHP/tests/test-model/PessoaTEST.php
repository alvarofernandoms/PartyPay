<?php

include '../../model/Pessoa.php';

class PessoaTEST extends PHPUnit_Framework_TestCase{
    public $test;

    public function setUp(){
    	$this->test = new Pessoa();
    }

    public function testInsercaoPrimeiroNome(){
    	$primeiroNome = $this->test->setPrimeiroNome("nome");
    	$nome = $this->test->getPrimeiroNome();    	
    	$this->assertTrue($nome == "nome");
    }
    public function testInsercaoSobreNome(){
    	$sobreNome = $this->test->setSobreNome("sobrenome");
    	$nome = $this->test->getSobreNome();    	
    //	$this->assertTrue($nome == "sobrenome");
    	$this->assertEquals("sobrenome", $nome);
    }

    public function testInsercaoEmail(){
    	$email = $this->test->setEmail("email");
    	$nome = $this->test->getEmail();    	
    //	$this->assertTrue($nome == "email");
    	$this->assertEquals("email", $nome);
    }

    public function testInsercaoId(){
    	$Id = $this->test->setId("Id");
    	$nome = $this->test->getId();    	
    //	$this->assertTrue($nome == "Id");
    	$this->assertEquals("Id", $nome);
    }

    public function testPassword(){
    	$Password = $this->test->setPassword("Password");
    	$nome = $this->test->getPassword();    	
    //	$this->assertTrue($nome == "Password");
    	$this->assertEquals("Password", $nome);
    }
    
    public function testSexo(){
    	$Sexo = $this->test->setId("Feminino");
    	$nome = $this->test->getSexo();    	
    //	$this->assertTrue($nome == "Sexo");
    	$this->assertEquals("Masculino", $nome);
    }

    // TODO continuar daqui
    // O último teste está falhando para marcar a continuação apartir daqui
    // Fazer os demais parametros
}

?>