<?php

include 'DAC/PessoaDAC.php';

class Pessoa {

    private $primeiroNome;
    private $sobreNome;
    private $email;
    private $id;
    private $password;
    private $sexo;
    private $codConfirmacao;
    private $cpf;
    private $compras;
    private $cartoesDeCredito;
    private $cnpj;
    private $eventos;
    private $informaçoesBancarias;
    private $telefoneContato;
    private $nomeFantasia;
    private $website;
    private $facebookFanPage;

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getEventos() {
        return $this->eventos;
    }

    public function setEventos($eventos) {
        $this->eventos = $eventos;
    }

    public function getInformaçoesBancarias() {
        return $this->informaçoesBancarias;
    }

    public function setInformaçoesBancarias($informaçoesBancarias) {
        $this->informaçoesBancarias = $informaçoesBancarias;
    }

    public function getTelefoneContato() {
        return $this->telefoneContato;
    }

    public function setTelefoneContato($telefoneContato) {
        $this->telefoneContato = $telefoneContato;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function getWebsite() {
        return $this->website;
    }

    public function setWebsite($website) {
        $this->website = $website;
    }

    public function getFacebookFanPage() {
        return $this->facebookFanPage;
    }

    public function setFacebookFanPage($facebookFanPage) {
        $this->facebookFanPage = $facebookFanPage;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getCompras() {
        return $this->compras;
    }

    public function setCompras($compras) {
        $this->compras = $compras;
    }

    public function getCartoesDeCredito() {
        return $this->cartoesDeCredito;
    }

    public function setCartoesDeCredito($cartoesDeCredito) {
        $this->cartoesDeCredito = $cartoesDeCredito;
    }

    public function getCodConfirmacao() {
        return $this->codConfirmacao;
    }

    public function setCodConfirmacao($codConfirmacao) {
        $this->codConfirmacao = $codConfirmacao;
    }

    function __construct() {
        
    }

    public function construaPorId($id) {
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

    public function persist() {
        return PessoaDAC::persist($this);
    }

    public function updateInfo($atributo, $novoValor) {
        PessoaDAC::updateInfo($this, $atributo, $novoValor);
    }

    public function delete() {
        PessoaDAC::delete($this);
    }

    public function atualizar() {
        PessoaDAC::atualizar($this);
    }

}

?>
