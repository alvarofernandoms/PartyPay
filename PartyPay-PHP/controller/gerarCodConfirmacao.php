<?php

function gerarCodigoConfirmaçao() {
    $seed = rand(10, 1000);
    $code = md5($seed . time());
    return($code);
}

?>
