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

    public function testInsercaoSobreNome() {
        $sobreNome = $this->test->setSobreNome("sobrenome");
        $nomeTeste = $this->test->getSobreNome();
        $this->assertEquals("sobrenome", $nomeTeste);
    }

    public function testInsercaoEmail() {
        $email = $this->test->setEmail("email");
        $nomeTeste = $this->test->getEmail();
        $this->assertEquals("email", $nomeTeste);
    }

    public function testInsercaoId() {
        $Id = $this->test->setId("Id");
        $nomeTeste = $this->test->getId();
        $this->assertEquals("Id", $nomeTeste);
    }

    public function testInsercaoPassword() {
        $password = $this->test->setPassword("Password");
        $nomeTeste = $this->test->getPassword();
        $this->assertEquals("Password", $nomeTeste);
    }

    public function testInsercaoSexo() {
        $sexo = $this->test->setSexo("Feminino");
        $nomeTeste = $this->test->getSexo();
        $this->assertEquals("Feminino", $nomeTeste);
    }

    // TODO continuar daqui
    // O último teste está falhando para marcar a continuação apartir daqui
    // test de inserção de Sexo passando, era só uma modificação no setSexo,
    // estava setId
    // Fazer os demais parametros

    public function testInsercaoCodConfirmacao() {
        $codConfirmacaoprimeiroNome = $this->test->setCodConfirmacao("132456");
        $nomeTeste = $this->test->getCodConfirmacao();
        $this->assertEquals("132456", $nomeTeste);
    }

    public function testInsercaoCpf() {
        $cpf = $this->test->setCpf("111.111.111-11");
        $nomeTeste = $this->test->getCpf();
        $this->assertEquals("111.111.111-11", $nomeTeste);
    }

    public function testInsercaoCompras() {
        $compras = $this->test->setCompras("compra01");
        $nomeTeste = $this->test->getCompras();
        $this->assertEquals("compra01", $nomeTeste);
    }

    public function testInsercaoCartoesDeCredito() {
        $cartoesDeCredito = $this->test->setCartoesDeCredito("cartão01");
        $nomeTeste = $this->test->getCartoesDeCredito();
        $this->assertEquals("cartão01", $nomeTeste);
    }

    public function testInsercaoCnpj() {
        $cnpj = $this->test->setCnpj("02.449.992/0056-38");
        $nomeTeste = $this->test->getCnpj();
        $this->assertEquals("02.449.992/0056-38", $nomeTeste);
    }

    public function testInsercaoEventos() {
        $eventos = $this->test->setEventos("PartyHard, Show do Metallica");
        $nomeTeste = $this->test->getEventos();
        $this->assertEquals("PartyHard, Show do Metallica", $nomeTeste);
    }

    public function testInsercaoInformacoesBancarias() {
        $informaçoesBancarias = $this->test->setInformaçoesBancarias("Visa: 666");
        $nomeTeste = $this->test->getInformaçoesBancarias();
        $this->assertEquals("Visa: 666", $nomeTeste);
    }

    public function testInsercaoTelefoneContato() {
        $telefoneContato = $this->test->setTelefoneContato("(11) 1111-1111");
        $nomeTeste = $this->test->getTelefoneContato();
        $this->assertEquals("(11) 1111-1111", $nomeTeste);
    }

    public function testInsercaoNomeFantasia() {
        $nomeFantasia = $this->test->setNomeFantasia("I'm Batman!");
        $nomeTeste = $this->test->getNomeFantasia();
        $this->assertEquals("I'm Batman!", $nomeTeste);
    }

    public function testInsercaoWebsite() {
        $website = $this->test->setWebsite("www.github.com/alvarofernandoms/PartyPay");
        $nomeTeste = $this->test->getWebsite();
        $this->assertEquals("www.github.com/alvarofernandoms/PartyPay", $nomeTeste);
    }

    public function testInsercaoFacebookFanPage() {
        $facebookFanPage = $this->test->setFacebookFanPage("www.facebook.com/dreamtheaterofficial");
        $nomeTeste = $this->test->getFacebookFanPage();
        $this->assertEquals("www.facebook.com/dreamtheaterofficial", $nomeTeste);
    }

    // OS TESTES DOS SETTERS E OS GETTERS TERMINAM AQUI
}

?>
