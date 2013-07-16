<?php
include '../../model/Evento.php';

class processaCadastroLocalTEST extends PHPUnit_Framework_TestCase {

    public $test;

    public function setUp() {
        $this->test = new Evento();
    }

    public function testFuncaoPersist() {
        $this->test->setNome("Festa Junina do Gama");
        $this->test->setDataInicio("17/07/2013");
        $this->test->setDataTermino("18/07/2013");
        $this->test->setHoraInicio("22" . ":" . "00");
        $this->test->setHoraTermino("03" . ":" . "30");
        $this->test->setNumeroIngressos("300");
        $this->test->setOrganizador("1");
	$this->test->setPrecoFem("18,50");
	$this->test->setPrecoMasc("20,00");
	$this->test->setFacebookEventPage("minha pagina no face");
	$this->test->setDescricao("Evento maroto");
	$this->test->setOrganizador("5");
	$this->test->setClassificacao("16");
		
        $resultadoTEST = $this->test->persist();
        $this->assertTrue($resultadoTEST == !Null);
    }
	
	
}


?>
