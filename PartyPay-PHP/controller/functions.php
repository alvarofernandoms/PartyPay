<?php

function sec_session_start() {
        $session_name = 'sec_session_id'; // Define um nome padrão de sessão
        $secure = false; // Defina como true (verdadeiro) caso esteja utilizando https.
        $httponly = true; // Isto impede que o javascript seja capaz de acessar a id de sessão. 
 
        ini_set('session.use_only_cookies', 1); // Força as sessões a apenas utilizarem cookies. 
        $cookieParams = session_get_cookie_params(); // Recebe os parâmetros atuais dos cookies.
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
        session_name($session_name); // Define o nome da sessão como sendo o acima definido.
        session_start(); // Inicia a sessão php.
        session_regenerate_id(true); // regenerada a sessão, deleta a outra.
}

?>
