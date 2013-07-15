<?php

require_once '../../controller/gerarCodConfirmacao.php';

class gerarCodConfirmacaoTEST extends PHPUnit_Framework_TestCase {

    public $test;

    public function testaGeracaoDeCodigo() {
        $codigo = gerarCodigoConfirmaçao();
        $this->assertTrue($codigo == !Null);
    }

}

?>
