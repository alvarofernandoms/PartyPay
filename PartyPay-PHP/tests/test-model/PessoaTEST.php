<?php

include '../../model/Pessoa.php';

class PessoaTEST extends PHPUnit_Framework_TestCase{
    public $test;

    public function setUp(){
    	$this->thes = new Pessoa("leandro");
    }

    public function testPrimeiroNome(){
    	$leandro = $this->test->getPrimeiroNome();
    	$this->assertTrue($leandro == "leandro");
    }
}

?>
