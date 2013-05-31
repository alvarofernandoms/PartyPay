<?php
include 'DAC/PessoaDAC.php';
class Pessoa{
    
    private $primeiroNome;
    private $sobreNome;

    
    private $email;

    private $id;
    private $password;

    private $sexo;
    private $codConfirmacao;
    public function getCodConfirmacao() {
        return $this->codConfirmacao;
    }

    public function setCodConfirmacao($codConfirmacao) {
        $this->codConfirmacao = $codConfirmacao;
    }

        
   

        
    
    function __construct() {
        
    }
    public function construaPorId($id){
        PessoaDAC::recupere($this, $id);
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
   
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    } 
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getPrimeiroNome() {
        return $this->primeiroNome;
    }
    public function setPrimeiroNome($primeiroNome) {
        $this->primeiroNome = $primeiroNome;
    }
    public function getSobreNome() {
        return $this->sobreNome;
    }
    public function setSobreNome($sobreNome) {
        $this->sobreNome = $sobreNome;
    }
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function persist(){
        PessoaDAC::persist($this);
    }
    public function updateInfo($atributo,$novoValor){
        PessoaDAC::updateInfo($this, $atributo, $novoValor);
    }
    public function delete(){
        PessoaDAC::delete($this);
    }
    
    
}

?>
