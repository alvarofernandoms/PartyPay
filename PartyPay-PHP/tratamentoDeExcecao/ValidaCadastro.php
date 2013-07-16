<?php

//$coverage = new PHP_CodeCoverage;
//$coverage->start('ValidaCadastroTEST.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidacaoPessoa
 *
 * @author Fagner-note
 */
require_once '../model/DAC/PessoaDAC.php';

class ValidaCadastro {

    var $campo;
    var $valor;
    var $msg = array();

    // Mensagens de erro
    public function mensagens($num, $campo) {

        $this->msg[0] = "Preencha o campo com um email válido <br />"; // EMAIL
        $this->msg[1] = "CEP com formato inválido (Ex: XXXXX-XXX) <br />"; // CEP
        $this->msg[2] = "Data em formato inválido, informe data como (Ex: DD/MM/AAAA) <br />"; // DATA
        $this->msg[3] = "Hora em formato inválido <br />"; // HORA
        $this->msg[4] = "Telefone inválido (Ex: 61-33333333) <br />"; // TELEFONE
        $this->msg[5] = "CPF inválido (Ex: 11111111111) <br />"; // CPF
        $this->msg[6] = "Preencha o campo " . $campo . " com numeros <br />"; // APENAS NUMEROS
        $this->msg[7] = "Por favor Preencha o campo " . $campo . " <br />"; // CAMPO VAZIO
        $this->msg[8] = "Ano informado e inferior ao ano corrente <br />"; // Data menor que ano corrente
        //$this->msg[8] = "O " . $campo . " deve ter no máximo " . $max . " caracteres <br />"; // MÁXIMO DE CARACTERES
        //$this->msg[9] = "O " . $campo . " deve ter no mínimo " . $min . " caracteres <br />"; // MÍNIMO DE CARACTERES
        $this->msg[10] = "E-mail já exite, cadastre outro e-mail <br />"; //apenas e-mail não armazenado no banco
        $this->msg[11] = "Minuto em formato inválido <br />"; //Minuto
        $this->msg[12] = "Informe um preço válido <br />"; //Preço
        $this->msg[13] = "Informe um número de vagas válida <br />"; //Vagas
        return $this->msg[$num];
    }

    // Validar Email
    function validarEmail($email) {
        if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
            //header("refresh:5;url=../cadastrarPessoa.php");
            echo $this->mensagens(0, 'email', null, null);
            return $this->mensagens(0, 'email', null, null);
            exit;

        } else {

            if (PessoaDAC::verifiqueDispo($email) == 0) {

                //header("refresh:5;url=../cadastrarPessoa.php");
                echo $this->mensagens(10, 'email', null, null);
                //return $this->mensagens(10, 'email', null, null);
                exit;
            }
        }
    }

    // Validar CEP (xxxxx-xxx)
    function validarCep($cep) {
        if(!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep)) {
            echo $this->mensagens(1, 'cep', null, null);
            exit();
        }
    }

    // Validar Datas (DD/MM/AAAA)
    function checkData($date) {        
        if (!isset($date) || $date == "") {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(2, 'data', null, null);
            return $this->mensagens(2, 'data', null, null);
            exit();
        }

        if (!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $date)) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(2, 'data', null, null);
            return $this->mensagens(2, 'data', null, null);
            exit();
        }
        $data = explode("/", $date);
        $d = $data[0];
        $m = $data[1];
        $y = $data[2];
        
        if ($y < 2013) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(8, 'data', null, null);
            return $this->mensagens(8, 'data', null, null);
            exit();
        }
        $result = checkdate($m, $d, $y);
        if ($result == FALSE) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(2, 'data', null, null);
            return $this->mensagens(2, 'data', null, null);
            exit();
        }
    }

    // VALIDAR HORA (23:59)
    function checktime($hora, $minuto) {
        if (!is_numeric($hora)) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(3, 'hora', null, null);
            exit();
        }
        if (!is_numeric($minuto)) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(11, 'hora', null, null);
            exit();
        }
        if (!preg_match('/^[0-23]{2,2}?$/', $hora)) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(3, 'hora', null, null);
            exit();
        }
        if (!preg_match('/^[0-59]{2,2}?$/', $minuto)) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(11, 'hora', null, null);
            exit();
        }
    }

    function validarPreco($preco) {
        if (!is_numeric($preco)) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(12, 'hora', null, null);
            return $this->mensagens(12, 'hora', null, null);
            exit();
        } elseif ($preco < 0) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(12, 'hora', null, null);
            return $this->mensagens(12, 'hora', null, null);
            exit();
        }
    }

    // VALIDAR HORA (23:59)
    function validarVaga($vaga) {
        if (!is_numeric($vaga)) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(13, 'hora', null, null);
            return $this->mensagens(13, 'hora', null, null);
            exit();
        } elseif ($vaga < 0) {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(13, 'hora', null, null);
            return $this->mensagens(13, 'hora', null, null);
            exit();
        }
    }

    // Validar Telefone (61-32363810)
    function validarTelefone($telefone) {
        if (!preg_match('^\(+[0-9]{2,3}\) [0-9]{4}-[0-9]{4}$^', $telefone)) {
            echo $this->mensagens(4, 'telefone', null, null);
            exit();
        }
    }

    // Validar CPF (99999999999)
function validarCpf($cpf){
        $cpf         = preg_replace("/[^0-9]/", "", $cpf);
        $digitoUm     = 0;
        $digitoDois = 0;
         
        for($i = 0, $x = 10; $i <= 8; $i++, $x--){
            $digitoUm += $cpf[$i] * $x;
        }
        for($i = 0, $x = 11; $i <= 9; $i++, $x--){
            if(str_repeat($i, 11) == $cpf){
                echo $this->mensagens(5, 'cpf', null, null);
                exit();
            }
            $digitoDois += $cpf[$i] * $x;
        }
         
        $calculoUm  = (($digitoUm%11) < 2) ? 0 : 11-($digitoUm%11);
        $calculoDois = (($digitoDois%11) < 2) ? 0 : 11-($digitoDois%11);
        if($calculoUm <> $cpf[9] || $calculoDois <> $cpf[10]){
            echo $this->mensagens(5, 'cpf', null, null);
            exit();
        }
    }
    
// Validar Numero
    function validarNumero($campo, $numero) {
        if (!is_numeric($numero)) {
            return $this->mensagens(6, $campo, null, null);
        }
    }

    // Verificação simples (Campo vazio, maximo/minimo de caracteres)
    function validarCampo($campo, $valor) {
        //$this->campo = $campo;
        if ($valor == "") {
            //header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(7, $campo);
            exit();
        }
    }

// Verifica se tem erros
    function verifica() {
        if (sizeof($this->msg) == 0) {
            return true;
        } else {
            return false;
        }
    }

}

//$coverage->stop();

//$writer = new PHP_CodeCoverage_Report_Clover;
//$writer->process($coverage, '/tmp/clover.xml');

?>  
