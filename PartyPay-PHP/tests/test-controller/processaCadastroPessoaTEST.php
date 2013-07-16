<?php

include '../../model/Pessoa.php';

class processaCadastroPessoaTEST extends PHPUnit_Framework_TestCase {

    public $test;

    public function setUp() {
        $this->test = new Pessoa();
    }

    public function testFuncaoPersist() {
        $this->test->setEmail("alvaro@gmail.com");
        $this->test->setPrimeiroNome("teste 2 primeiro nome");
        $this->test->setSobreNome("teste sobrenome");
        $this->test->setPassword(md5("123456")); //criptografia md5 para o password
        $this->test->setSexo("Masculino");
        $this->test->setCpf("111.111.111-11");
        $this->test->setTelefoneContato("(22) 2222-2222");
        $resultadoTEST = $this->test->persist();
        $this->assertTrue($resultadoTEST == !Null);
    }

}

?>