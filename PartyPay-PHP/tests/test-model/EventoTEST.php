<?php

include '../../model/Evento.php';

class EventoTEST extends PHPUnit_Framework_TestCase {

    public $test;

    public function setUp() {
        $this->test = new Evento();
    }

    // TESTANDO SETTERS E OS GETTERS

    public function testInsercaoNome() {
        $nome = $this->test->setNome("nome");
        $nomeTeste = $this->test->getNome();
        $this->assertEquals("nome", $nomeTeste);
    }

    public function testInsercaoDataCriacao() {
        $dataCriacao = $this->test->setDataCriacao("25/12/1999");
        $nomeTeste = $this->test->getDataCriacao();
        $this->assertEquals("25/12/1999", $nomeTeste);
    }

    public function testInsercaoDataInicio() {
        $dataInicio = $this->test->setDataInicio("26/12/2001");
        $nomeTeste = $this->test->getDataInicio();
        $this->assertEquals("26/12/2001", $nomeTeste);
    }

    public function testInsercaoDataTermino() {
        $dataTermino = $this->test->setDataTermino("28/12/2001");
        $nomeTeste = $this->test->getDataTermino();
        $this->assertEquals("28/12/2001", $nomeTeste);
    }

    public function testInsercaoImagem() {
        $imagem = $this->test->setImagem("imagem001");
        $nomeTeste = $this->test->getImagem();
        $this->assertEquals("imagem001", $nomeTeste);
    }

    public function testInsercaoPrecoMasc() {
        $precoMasc = $this->test->setPrecoMasc(50.00);
        $nomeTeste = $this->test->getPrecoMasc();
        $this->assertEquals(50.00, $nomeTeste);
    }

    public function testInsercaoPrecoFem() {
        $precoFem = $this->test->setPrecoFem(25.00);
        $nomeTeste = $this->test->getPrecoFem();
        $this->assertEquals(25.00, $nomeTeste);
    }

    public function testInsercaoOrganizador() {
        $organizador = $this->test->setOrganizador("Promotor Fulano");
        $nomeTeste = $this->test->getOrganizador();
        $this->assertEquals("Promotor Fulano", $nomeTeste);
    }

    public function testInsercaoLocal() {
        $local = $this->test->setLocal("Gama - DF");
        $nomeTeste = $this->test->getLocal();
        $this->assertEquals("Gama - DF", $nomeTeste);
    }

    public function testInsercaoFacebookEventPage() {
        $facebookEventPage = $this->test->setFacebookEventPage("www.facebook.com/dreamtheaterofficial");
        $nomeTeste = $this->test->getFacebookEventPage();
        $this->assertEquals("www.facebook.com/dreamtheaterofficial", $nomeTeste);
    }

    public function testInsercaoDescricao() {
        $descricao = $this->test->setDescricao("Descrição sagaz");
        $nomeTeste = $this->test->getDescricao();
        $this->assertEquals("Descrição sagaz", $nomeTeste);
    }

    public function testInsercaoNumeroIngressos() {
        $numeroIngressos = $this->test->setNumeroIngressos(500);
        $nomeTeste = $this->test->getNumeroIngressos();
        $this->assertEquals(500, $nomeTeste);
    }

    public function testInsercaoHoraInicio() {
        $horaInicio = $this->test->setHoraInicio("22:00");
        $nomeTeste = $this->test->getHoraInicio();
        $this->assertEquals("22:00", $nomeTeste);
    }

    public function testInsercaoHoraTermino() {
        $horaTermino = $this->test->setHoraTermino("08:00");
        $nomeTeste = $this->test->getHoraTermino();
        $this->assertEquals("08:00", $nomeTeste);
    }

    public function testInsercaoMiniatura() {
        $miniatura = $this->test->setMiniatura("miniaturaImagem001");
        $nomeTeste = $this->test->getMiniatura();
        $this->assertEquals("miniaturaImagem001", $nomeTeste);
    }

    public function testInsercaoClassificacao() {
        $classificacao = $this->test->setClassificacao("Livre");
        $nomeTeste = $this->test->getClassificacao();
        $this->assertEquals("Livre", $nomeTeste);
    }

    // OS TESTES DOS SETTERS E OS GETTERS TERMINAM AQUI
}

?>
