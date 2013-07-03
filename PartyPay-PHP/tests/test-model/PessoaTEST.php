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
        $nome = $this->test->getPrimeiroNome();
        $this->assertEquals("nome", $nome);
    }

    public function testInsercaoSobreNome() {
        $sobreNome = $this->test->setSobreNome("sobrenome");
        $nome = $this->test->getSobreNome();
        $this->assertEquals("sobrenome", $nome);
    }

    public function testInsercaoEmail() {
        $email = $this->test->setEmail("email");
        $nome = $this->test->getEmail();
        $this->assertEquals("email", $nome);
    }

    public function testInsercaoId() {
        $Id = $this->test->setId("Id");
        $nome = $this->test->getId();
        $this->assertEquals("Id", $nome);
    }

    public function testInsercaoPassword() {
        $Password = $this->test->setPassword("Password");
        $nome = $this->test->getPassword();
        $this->assertEquals("Password", $nome);
    }

    public function testInsercaoSexo() {
        $Sexo = $this->test->setSexo("Feminino");
        $nome = $this->test->getSexo();
        $this->assertEquals("Feminino", $nome);
    }

    // TODO continuar daqui
    // O último teste está falhando para marcar a continuação apartir daqui
    // test de inserção de Sexo passando, era só uma modificação no setSexo,
    // estava setId
    // Fazer os demais parametros

    public function testInsercaoCodConfirmacao() {
        $primeiroNome = $this->test->setCodConfirmacao("132456");
        $nome = $this->test->getCodConfirmacao();
        $this->assertEquals("132456", $nome);
    }

    public function testInsercaoCpf() {
        $primeiroNome = $this->test->setCpf("111.111.111-11");
        $nome = $this->test->getCpf();
        $this->assertEquals("111.111.111-11", $nome);
    }

    public function testInsercaoCompras() {
        $primeiroNome = $this->test->setCompras("compra01");
        $nome = $this->test->getCompras();
        $this->assertEquals("compra01", $nome);
    }

    public function testInsercaoCartoesDeCredito() {
        $primeiroNome = $this->test->setCartoesDeCredito("cartão01");
        $nome = $this->test->getCartoesDeCredito();
        $this->assertEquals("cartão01", $nome);
    }

    public function testInsercaoCnpj() {
        $primeiroNome = $this->test->setCnpj("02.449.992/0056-38");
        $nome = $this->test->getCnpj();
        $this->assertEquals("02.449.992/0056-38", $nome);
    }

    public function testInsercaoEventos() {
        $primeiroNome = $this->test->setEventos("PartyHard, Show do Metallica");
        $nome = $this->test->getEventos();
        $this->assertEquals("PartyHard, Show do Metallica", $nome);
    }

    public function testInsercaoInformacoesBancarias() {
        $primeiroNome = $this->test->setInformaçoesBancarias("Visa: 666");
        $nome = $this->test->getInformaçoesBancarias();
        $this->assertEquals("Visa: 666", $nome);
    }

    public function testInsercaoTelefoneContato() {
        $primeiroNome = $this->test->setTelefoneContato("(11) 1111-1111");
        $nome = $this->test->getTelefoneContato();
        $this->assertEquals("(11) 1111-1111", $nome);
    }

    public function testInsercaoNomeFantasia() {
        $primeiroNome = $this->test->setNomeFantasia("I'm Batman!");
        $nome = $this->test->getNomeFantasia();
        $this->assertEquals("I'm Batman!", $nome);
    }

    public function testInsercaoWebsite() {
        $primeiroNome = $this->test->setWebsite("www.github.com/alvarofernandoms/PartyPay");
        $nome = $this->test->getWebsite();
        $this->assertEquals("www.github.com/alvarofernandoms/PartyPay", $nome);
    }

    public function testInsercaoFacebookFanPage() {
        $primeiroNome = $this->test->setFacebookFanPage("www.facebook.com/dreamtheaterofficial");
        $nome = $this->test->getFacebookFanPage();
        $this->assertEquals("www.facebook.com/dreamtheaterofficial", $nome);
    }
    
    // TESTES DOS SETTERS E OS GETTERS TERMINAM AQUI

}

?>