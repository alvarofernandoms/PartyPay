<?php

include '../../model/Pessoa.php';
require_once '../../controller/processaEditaPessoa.php';

class processaEditaPessoaTEST extends PHPUnit_Framework_TestCase {

    public $test;

    public function setUp() {
        $this->test = new Pessoa();
    }

    // TESTANDO SETTERS E OS GETTERS

    //public function testInsercaoPrimeiroNome() {
    //    $primeiroNome = $this->test->setPrimeiroNome("nome");
    //    $nomeTeste = $this->test->getPrimeiroNome();
    //    $this->assertEquals("nome", $nomeTeste);
    //}
    
    public function testSession() {
        $esboco = this.getMock(processaEditaPessoaTEST);
        $esboco->expects($this->any())
        ->method();
    }   
       
}

?>
