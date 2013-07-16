<?php

include '../../model/Local.php';

class LocalTEST extends PHPUnit_Framework_TestCase {

    public $test;

    public function setUp() {
        $this->test = new Local();
    }

    // TESTANDO SETTERS E OS GETTERS

    public function testInsercaoEndereco() {
        $endereco = $this->test->setEndereco("Quadra 2");
        $nomeTeste = $this->test->getEndereco();
        $this->assertEquals("Quadra 2", $nomeTeste);
    }

    public function testInsercaoNumero() {
        $numero = $this->test->setNumero("Casa 2");
        $nomeTeste = $this->test->getNumero();
        $this->assertEquals("Casa 2", $nomeTeste);
    }

    public function testInsercaoComplemento() {
        $complemento = $this->test->setComplemento("complemento teste");
        $nomeTeste = $this->test->getComplemento();
        $this->assertEquals("complemento teste", $nomeTeste);
    }

    public function testInsercaoBairro() {
        $bairro = $this->test->setBairro("Setor Oeste");
        $nomeTeste = $this->test->getBairro();
        $this->assertEquals("Setor Oeste", $nomeTeste);
    }

    public function testInsercaoCidade() {
        $cidade = $this->test->setCidade("Gama");
        $nomeTeste = $this->test->getCidade();
        $this->assertEquals("Gama", $nomeTeste);
    }

    public function testInsercaoCep() {
        $cep = $this->test->setCep("72.000-000");
        $nomeTeste = $this->test->getCep();
        $this->assertEquals("72.000-000", $nomeTeste);
    }

    public function testInsercaoPais() {
        $pais = $this->test->setPais("Brasil");
        $nomeTeste = $this->test->getPais();
        $this->assertEquals("Brasil", $nomeTeste);
    }

    public function testInsercaoCoordenadaGoogleMaps() {
        $coordenadaGoogleMaps = $this->test->setCoordenadaGoogleMaps("-15, +12");
        $nomeTeste = $this->test->getCoordenadaGoogleMaps();
        $this->assertEquals("-15, +12", $nomeTeste);
    }

    public function testInsercaoFotos() {
        $fotos = $this->test->setFotos("Foto 0001");
        $nomeTeste = $this->test->getFotos();
        $this->assertEquals("Foto 0001", $nomeTeste);
    }

    public function testInsercaoId() {
        $id = $this->test->setId("150");
        $nomeTeste = $this->test->getId();
        $this->assertEquals("150", $nomeTeste);
    }

    public function testInsercaoNome() {
        $nome = $this->test->setNome("Nome do evento TESTE");
        $nomeTeste = $this->test->getNome();
        $this->assertEquals("Nome do evento TESTE", $nomeTeste);
    }

    public function testInsercaoEstado() {
        $estado = $this->test->setEstado("Distrito Federal");
        $nomeTeste = $this->test->getEstado();
        $this->assertEquals("Distrito Federal", $nomeTeste);
    }

    public function testInsercaoMiniatura() {
        $miniatura = $this->test->setMiniatura("Miniatura 001");
        $nomeTeste = $this->test->getMiniatura();
        $this->assertEquals("Miniatura 001", $nomeTeste);
    }

    // OS TESTES DOS SETTERS E OS GETTERS TERMINAM AQUI
}

?>
