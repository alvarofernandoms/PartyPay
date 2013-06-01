<?php

require_once 'DAC/LocalDAC.php';

class Local {

    private $endereço;
    private $coordenadaGoogleMaps;
    private $fotos;
    private $id;
    private $nome;

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

    public function persist() {
        LocalDAC::persist($this);
    }

    public function updateInfo($atributo, $novoValor) {
        LocalDAC::updateInfo($this, $atributo, $novoValor);
    }

    public function delete() {
        LocalDAC::delete($this);
    }

}

?>
