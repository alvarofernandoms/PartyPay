<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidacaoPessoa
 *
 * @author Fagner-note
 */
class ValidaCadastro {
 
    var $campo;
    var $valor;
    var $msg = array();

    // Mensagens de erro
    function mensagens($num, $campo) {

        $this->msg[0] = "Preencha o campo com um email válido <br />"; // EMAIL
        $this->msg[1] = "CEP com formato inválido (Ex: XXXXX-XXX) <br />"; // CEP
        $this->msg[2] = "Data em formato inválido, informe data como (Ex: DD/MM/AAAA) <br />"; // DATA
        $this->msg[3] = "Hora em formato inválido <br />"; // HORA
        $this->msg[4] = "Telefone inválido (Ex: 01433333333) <br />"; // TELEFONE
        $this->msg[5] = "CPF inválido (Ex: 11111111111) <br />"; // CPF
        $this->msg[6] = "Preencha o campo " . $campo . " com numeros <br />"; // APENAS NUMEROS
        $this->msg[7] = "Por favor Preencha o campo " . $campo . " <br />"; // CAMPO VAZIO
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
        //if (!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/", $email)) {
        //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)){
            header("refresh:5;url=../cadastrarPessoa.php");
            echo $this->mensagens(0, 'email', null, null);
            exit;
            //return $this->mensagens(0, 'email', null, null);
        } else if (PessoaDAC::verifiqueDispo($email) == 1) {
             {
                header("refresh:5;url=../cadastrarPessoa.php");
                echo $this->mensagens(10, 'email', null, null);
                exit;
            }
        }
    }

    // Validar CEP (xxxxx-xxx)
    function validarCep($cep) {
        if (!eregi("^[0-9]{5}-[0-9]{3}$", $cep)) {
            return $this->mensagens(1, 'cep', null, null);
        }
    } 
    
    // Validar Datas (DD/MM/AAAA)
    function validarData($data) {
         //if (!preg_match("/^[0-9]{2}/[0-9]{2}/[0-9]{4}$", $data)) {
            $data = explode("/",$data);
            $dia = $data[0];
            $mes = $data[1];
            $ano = $data[2];
            $result = checkdate($dia,$mes,$ano);
                    if($result == 0){
            // header("refresh:5;url=../cadastrarEvento.php");
             echo $this->mensagens(2, 'data', null, null);
             exit();
         }
    } 
    
    // Validar Datas (DD/MM/AAAA)
    function checkData($date)
{
        if (!isset($date) || $date=="")
        {
            header("refresh:5;url=../cadastrarEvento.php");
            echo $this->mensagens(2, 'data', null, null);
            exit();
        }
        
  if (!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $date))
  {
      header("refresh:5;url=../cadastrarEvento.php");
      echo $this->mensagens(2, 'data', null, null);
            exit();
  }
  $data = explode("/", $date);
  $d = $data[0];
  $m = $data[1];
  $y = $data[2];
  $result = checkdate($m, $d, $y);
  if($result == 0)
  {
      header("refresh:5;url=../cadastrarEvento.php");
       echo $this->mensagens(2, 'data', null, null);
            exit();
  }  
}

    // VALIDAR HORA (23:59)
    function checktime($hora, $minuto)
{
    if(!is_numeric($hora))
    {
        header("refresh:5;url=../cadastrarEvento.php");
        echo $this->mensagens(3, 'hora', null, null);
        exit();
    }
    if(!is_numeric($minuto))
    {
        header("refresh:5;url=../cadastrarEvento.php");
        echo $this->mensagens(11, 'hora', null, null);
        exit();
    }
    if(!preg_match ('/^[0-23]{2,2}?$/', $hora))
    {
        //header("refresh:5;url=../cadastrarEvento.php");
        echo $this->mensagens(3, 'hora', null, null);
        exit();
    }
    if(!preg_match ('/^[0-59]{2,2}?$/', $minuto))
    {
        header("refresh:5;url=../cadastrarEvento.php");
        echo $this->mensagens(11, 'hora', null, null);
        exit();
    }
   /*list($hour,$minute) = explode(':',$time);
 
   if ($hour > -1 && $hour < 24 && $minute > -1 && $minute < 60)
   {
      return true;
   }
   else
       return $this->mensagens(3, 'hora', null, null);*/
} 

function validarPreco($preco) {
    if(!is_numeric($preco))
    {
        header("refresh:5;url=../cadastrarEvento.php");
        echo $this->mensagens(12, 'hora', null, null);
        exit();
    }
    elseif($preco < 0)
    {
        header("refresh:5;url=../cadastrarEvento.php");
        echo $this->mensagens(12, 'hora', null, null);
        exit();
    }
}

function validarVaga($vaga)
{
    if(!is_numeric($vaga))
    {
        header("refresh:5;url=../cadastrarEvento.php");
        echo $this->mensagens(13, 'hora', null, null);
        exit();
    }
    elseif($vaga < 0)
    {
        header("refresh:5;url=../cadastrarEvento.php");
        echo $this->mensagens(13, 'hora', null, null);
        exit();
    }
}


    // Validar Telefone (01432363810)
    function validarTelefone($telefone) {
        if (!eregi("^[0-9]{11}$", $telefone)) {
            return $this->mensagens(4, 'telefone', null, null);
        }
    }

    // Validar CPF (99999999999)
    function validarCpf($cpf) {

        if (!is_numeric($cpf)) {
            $status = false;
        } else {
            # Pega o digito verificador
            $dv_informado = substr($cpf, 9, 2);

            for ($i = 0; $i <= 8; $i++) {
                $digito[$i] = substr($cpf, $i, 1);
            }
            # Calcula o valor do 10° digito de verificação
            $posicao = 10;
            $soma = 0;

            for ($i = 0; $i <= 8; $i++) {
                $soma = $soma + $digito[$i] * $posicao;
                $posicao = $posicao - 1;
            }

            $digito[9] = $soma % 11;

            if ($digito[9] < 2) {
                $digito[9] = 0;
            } else {
                $digito[9] = 11 - $digito[9];
            }

            # Calcula o valor do 11° digito de verificação
            $posicao = 11;
            $soma = 0;

            for ($i = 0; $i <= 9; $i++) {
                $soma = $soma + $digito[$i] * $posicao;
                $posicao = $posicao - 1;
            }

            $digito[10] = $soma % 11;

            if ($digito[10] < 2) {
                $digito[10] = 0;
            } else {
                $digito[10] = 11 - $digito[10];
            }

            # Verifica se o dv é igual ao informado
            $dv = $digito[9] * 10 + $digito[10];

            if ($dv != $dv_informado) {
                $status = false;
            }
            else
                $status = true;
        }

        # Se houver erro
        if (!$status) {
            return $this->mensagens(5, 'cpf', null, null);
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
            header("refresh:5;url=../cadastrarEvento.php");
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

?>
