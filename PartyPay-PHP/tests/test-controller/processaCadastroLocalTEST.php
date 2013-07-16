<?php

include '../../model/Local.php';

class processaCadastroLocalTEST extends PHPUnit_Framework_TestCase {

    public $test;

    public function setUp() {
        $this->test = new Local();
    }

    public function testFuncaoPersist() {
        $this->test->setBairro("Oeste");
        $this->test->setCep("724250000");
        $this->test->setCidade("Gama");
        $this->test->setComplemento("Apartamento 201");
        $this->test->setEndereco("Quadra A");
        $this->test->setNome("Fazenda");
        $this->test->setPais("Brasil");
	$this->test->setEstado("Distrito Federal");
        $resultadoTEST = $this->test->persist();
        $this->assertTrue($resultadoTEST == !Null);
    }
	
}

?>
