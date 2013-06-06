<?php

require_once 'DAC/EventoDAC.php';

class Evento {

    private $nome;//nome do evento
    private $dataCriacao;
    private $dataInicio;
    private $dataTermino;
    private $imagem;//input do tipo file name arquivo
    private $precoMasc;
    private $precoFem;
    private $organizador;//nao precisa
    private $local;//nao precisa
    private $facebookEventPage;
    private $descricao;
    private $numeroIngressos;
    private $horaInicio;
    private $horaTermino;
    private $miniatura;//nao precisa
    private $classificacao;
    
    public function getClassificacao() {
        return $this->classificacao;
    }

    public function setClassificacao($classificacao) {
        $this->classificacao = $classificacao;
    }

    

    public function getMiniatura() {
        return $this->miniatura;
    }

    public function setMiniatura($miniatura) {
        $this->miniatura = $miniatura;
    }

        
    public function getHoraInicio() {
        return $this->horaInicio;
    }

    public function setHoraInicio($horaInicio) {
        $this->horaInicio = $horaInicio;
    }

    public function getHoraTermino() {
        return $this->horaTermino;
    }

    public function setHoraTermino($horaTermino) {
        $this->horaTermino = $horaTermino;
    }
    
    function __construct() {
        
    }

    
    public function getNumeroIngressos() {
        return $this->numeroIngressos;
    }

    public function setNumeroIngressos($numeroIngressos) {
        $this->numeroIngressos = $numeroIngressos;
    }

    
    public function getDataCriacao() {
        return $this->dataCriacao;
    }

    public function setDataCriacao($dataCriacao) {
        $this->dataCriacao = $dataCriacao;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getFacebookEventPage() {
        return $this->facebookEventPage;
    }

    public function setFacebookEventPage($facebookEventPage) {
        $this->facebookEventPage = $facebookEventPage;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDataInicio() {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    public function getDataTermino() {
        return $this->dataTermino;
    }

    public function setDataTermino($dataTermino) {
        $this->dataTermino = $dataTermino;
    }

    public function getPrecoMasc() {
        return $this->precoMasc;
    }

    public function setPrecoMasc($precoMasc) {
        $this->precoMasc = $precoMasc;
    }

    public function getPrecoFem() {
        return $this->precoFem;
    }

    public function setPrecoFem($precoFem) {
        $this->precoFem = $precoFem;
    }

    public function getOrganizador() {
        return $this->organizador;
    }

    public function setOrganizador($organizador) {
        $this->organizador = $organizador;
    }

    public function getLocal() {
        return $this->local;
    }

    public function setLocal($local) {
        $this->local = $local;
    }

    public function persist() {
        return EventoDAC::persist($this);
    }

    public function updateInfo($atributo, $novoValor) {
        EventoDAC::updateInfo($this, $atributo, $novoValor);
    }

    public function delete() {
        EventoDAC::delete($this);
    }

}

?>
