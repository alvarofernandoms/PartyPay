<?php
require_once 'DAC/LocalDAC.php';
class Local {
    private $endereço;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $cep;
    private $pais;
    private $coordenadaGoogleMaps;
    private $fotos;
    private $id;
    private $nome;
    private $estado;
    
    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    
    function __construct() {
        
    }
    
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    } 
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

        
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        
    public function getEndereço() {
        return $this->endereço;
    }

    public function setEndereço($endereço) {
        $this->endereço = $endereço;
    }

    public function getCoordenadaGoogleMaps() {
        return $this->coordenadaGoogleMaps;
    }

    public function setCoordenadaGoogleMaps($coordenadaGoogleMaps) {
        $this->coordenadaGoogleMaps = $coordenadaGoogleMaps;
    }

    public function getFotos() {
        return $this->fotos;
    }

    public function setFotos($fotos) {
        $this->fotos = $fotos;
    }

    public function persist(){
        LocalDAC::persist($this);
    }
    
    public function updateInfo($atributo,$novoValor){
        LocalDAC::updateInfo($this, $atributo, $novoValor);
    }
    
    public function delete(){
        LocalDAC::delete($this);
    }
}

?>
