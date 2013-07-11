<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2013-07-11 at 02:29:41.
 */

include '../../tratamentoDeExcecao/ValidaCadastro.php';
class ValidaCadastroTest extends PHPUnit_Framework_TestCase {

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
        $this->assertEquals($expected,$actual);
    }

    /**
     * @covers ValidaCadastro::validarEmail
     * @todo   Implement testValidarEmail().
     */
    public function testValidarEmailValido() {
        $actual= $this->object->validarEmail("cotrim149@gmail.com");
        $expected=NULL;
        $this->assertEquals($expected, $actual);
        
        
    }

    public function testValidarEmailNaoValido(){
        //$this->markTestIncomplete('Este teste será implementado mais tarde');
        
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
     * @todo   Implement testValidarData().
     */
    public function testValidarData() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
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
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
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
