<?php
require_once ('header.php');

if (isset($evento)) {
    unset($evento);
}
$evento = new Evento();

$idEvento = $_GET['id'];
$evento->eventoPorID($idEvento);

$nomeEvento = $evento->getNome();

$dataInicio = $evento->getDataInicio();
$dataTermino = $evento->getDataTermino();
$imagem = $evento->getImagem();
$precoMasc = $evento->getPrecoMasc();
$precoFem = $evento->getPrecoFem();
$organizador = $evento->getOrganizador();
$facebook = $evento->getFacebookEventPage();
$dataCriacao = $evento->getDataCriacao();
$descricao = $evento->getDescricao();
$numeroIngressos = $evento->getNumeroIngressos();
$horaInicio = $evento->getHoraInicio();
$horaTermino = $evento->getHoraTermino();
$miniatura = $evento->getMiniatura();
$classificacao = $evento->getClassificacao();
?>

<div class="container">
    <h1><?php echo $nomeEvento; ?></h1>
    <div class="row">
        <div class="span8 conteudo">
            <img src="<?php echo $imagem; ?>" alt="">
            <p><?php echo $descricao; ?></p>

        </div>
        <div class="span4">
            <div class="data well">
                <h4>Data</h4>
                <span class="horario"><?php echo ("De " . $dataInicio . " at&eacute; " . $dataTermino); ?></span>
            </div>
            <div class="Local well">
                <h4>Local</h4>
                <p><span>Hub Sao Paulo(Bela Cintra)</span>
                    <br>Rua Bela Cintra, 409 - Consolação, Sao Paulo - São Paulo, 01415-000, Brazil<br>
                    <a class="btn btn-mini" href="http://maps.google.com/maps?q=Rua Bela Cintra, 409 - Consolação, Sao Paulo - São Paulo, 01415-000, Brazil" target="_blank" style="font-size: 11px;"><i class="icon-map-marker"></i>Ver no mapa</a>
                </p>
            </div>
            <div class="comprar well">
                <a href="" class="btn btn-large btn-success">Comprar ingresso</a>
            </div>
        </div>
    </div>
</div>

<?php require_once ('footer.php'); ?>