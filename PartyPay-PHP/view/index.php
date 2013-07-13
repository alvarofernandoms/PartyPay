<?php   require_once 'header.php'; 
        include "model/Evento.php";
?>
            <div id="hero" class="">
                <ul>
                    <li><img src="view/img/slide.jpg" alt="" /></li>
                </ul>
                <div class="busca">
                    <h1>O que tem de bom pra hoje?</h1>
                    <h2>Encontre eventos</h2>
                    <div class="navbar">
                        <div class="navbar-inner">
                            <form class="navbar-form pull-left">
                                <input type="text" class="span10">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <section class="container">
            <h3>Eventos em destaque</h3>
            <div class="row">
                <ul class="thumbnails">
                 <?php 

                    $num = ultimoEvento();

                    for($i=0; $i<3; $i++){
                        $evento = new Evento;
                        $evento->eventoPorId($num-$i);
                        $nome = $evento->getNome();
                ?>

                    <li class="span4">
                        <a href="evento.php?id=<?php echo (ultimoEvento()-$i); ?>" class="thumbnail">
                            <img src="view/img/3.jpg" alt="">
                            <p><?php echo $nome; ?></p>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="row">
                <ul class="thumbnails">
                 <?php 

                    $num = ultimoEvento();

                    for($i=3; $i<6; $i++){
                        $evento = new Evento;
                        $evento->eventoPorId($num-$i);
                        $nome = $evento->getNome();
                ?>

                    <li class="span4">
                        <a href="evento.php?id=<?php echo (ultimoEvento()-$i); ?>" class="thumbnail">
                            <img src="view/img/3.jpg" alt="">
                            <p><?php echo $nome; ?></p>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
        <footer>
        </footer>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="view/js/bootstrap.min.js"></script>
        <script src="view/js/bootstrap-responsive.min.js"></script>
    </body>
</html>
