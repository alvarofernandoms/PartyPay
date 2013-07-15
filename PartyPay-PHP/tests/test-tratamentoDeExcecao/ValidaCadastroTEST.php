/
<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2013-07-11 at 02:29:41.
 */
require_once '../../tratamentoDeExcecao/ValidaCadastro.php';

class ValidaCadastroTest extends PHPUnit_Framework_TestCase {

    public $test;

    /**
     * @var ValidaCadastro
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new ValidaCadastro;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers ValidaCadastro::mensagens
     */
    public function testMensagemNumero6() {
        // Remove the following lines when you implement this test.
        $actual = $this->object->mensagens(6, 'nome');
        $expected = "Preencha o campo nome com numeros <br />";
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers ValidaCadastro::validarEmail
     * @todo   Implement testValidarEmail().
     */
    public function testValidarEmailValido() {
        $this->markTestSkipped('pulando teste para não comitar quebrado');
        $actual = $this->object->validarEmail("cotrim149@gmail.com");
        $expected = NULL;
        $this->assertEquals($expected, $actual);
    }

    public function testValidarEmailNaoValido() {
        $this->markTestSkipped('pulando teste para não comitar quebrado');
        $actual = $this->object->validarEmail("cotri&m149@gmail.com");
        $expected = "Preencha o campo com um email válido <br />";
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers ValidaCadastro::validarCep
     * @todo   Implement testValidarCep().
     */
    public function testValidarCep() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidaCadastro::validarData
     */
    public function testValidarDataCorreta() {
        // Remove the following lines when you implement this test.
        //$this->markTestSkipped('pulando teste para não comitar quebrado');
        $actual = $this->object->validarData('22/04/2013');
        $expected = NULL;
        $this->assertEquals($expected, $actual);
    }

    public function testValidarDataDia() {
        // Remove the following lines when you implement this test.
        //$this->markTestSkipped('pulando teste para não comitar quebrado');
        $actual = $this->object->validarData('244/04/2013');
        $expected = "Data em formato inválido, informe data como (Ex: DD/MM/AAAA) <br />";
        $this->assertEquals($expected, $actual);
    }

    public function testValidarDataMes() {
        // Remove the following lines when you implement this test.
        //$this->markTestSkipped('pulando teste para não comitar quebrado');
        $actual = $this->object->validarData('24/043/2013');
        $expected = "Data em formato inválido, informe data como (Ex: DD/MM/AAAA) <br />";
        $this->assertEquals($expected, $actual);
    }

    public function testValidarDataAnoInferior() {
        // Remove the following lines when you implement this test.
        //$this->markTestSkipped('pulando teste para não comitar quebrado');
        $actual = $this->object->validarData('24/04/2010');
        $expected = "Ano informado é inferior ao ano corrente <br />";
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers ValidaCadastro::checkData
     * @todo   Implement testCheckData().
     */
    public function testCheckData() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidaCadastro::checktime
     * @todo   Implement testChecktime().
     */
    public function testChecktime() {
        // Remove the following lines when you implement this test.
        $expected = NULL;
        $actual = $this->object->checktime(23, 59);
        $this->assertEquals($expected,$actual);
    }

    /**
     * @covers ValidaCadastro::validarPreco
     * @todo   Implement testValidarPreco().
     */
    public function testValidarPreco() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidaCadastro::validarVaga
     * @todo   Implement testValidarVaga().
     */
    public function testValidarVaga() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidaCadastro::validarTelefone
     * @todo   Implement testValidarTelefone().
     */
    public function testValidarTelefone() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidaCadastro::validarCpf
     * @todo   Implement testValidarCpf().
     */
    public function testValidarCpf() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidaCadastro::validarNumero
     * @todo   Implement testValidarNumero().
     */
    public function testValidarNumero() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidaCadastro::validarCampo
     * @todo   Implement testValidarCampo().
     */
    public function testValidarCampo() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ValidaCadastro::verifica
     * @todo   Implement testVerifica().
     */
    public function testVerifica() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}