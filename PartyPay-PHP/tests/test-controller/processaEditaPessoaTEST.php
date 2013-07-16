<?php

include '../../model/Pessoa.php';

class processaEditaPessoaTEST extends PHPUnit_Framework_TestCase {

    public $test;

    public function setUp() {
        $this->test = new Pessoa();
    }

    public function testFuncaoPersist() {
	
        $this->test->setPrimeiroNome("Nometeste");
        $this->test->setSobreNome("Sobrenometeste");
        $this->test->setCpf("111.111.111-11");
        $this->test->setTelefoneContato("(22) 2222-2222");
        $resultadoTEST = $this->test->persist();
        $this->assertTrue($resultadoTEST == !Null);
    }

}

?>
