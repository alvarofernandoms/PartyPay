<?php

include '../../controller/processaCadastroPessoa.php';

class PessoaTEST extends PHPUnit_Framework_TestCase{
    public $test;

    public function setUp(){
    	$this->test = new Pessoa();
    }

    public function testInsercaoPrimeiroNome(){
    	$primeiroNome = $_POST['primeiroNome'];
        $this->test->setPrimeiroNome("nome");
    	$nome = $this->test->getPrimeiroNome();    	
    	$this->assertTrue($nome == "nome");
    }

}

?>