<?php

include '../../model/Pessoa.php';

class PessoaTEST extends PHPUnit_Framework_TestCase {

    public $test;

    public function setUp() {
        $this->test = new Pessoa();
    }

    // TESTANDO SETTERS E OS GETTERS

    public function testInsercaoPrimeiroNome() {
        $primeiroNome = $this->test->setPrimeiroNome("nome");
        $nomeTeste = $this->test->getPrimeiroNome();
        $this->assertEquals("nome", $nomeTeste);
    }

}

?>
