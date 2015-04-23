<?php
    function ajustandoRotas(){
        $rotas = array('home','empresa','produtos','servicos','contato','index');
        $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $path = explode("/",$rota['path']);
        $pagina = strtolower($path[1]);

        if($pagina == ""){
            $pagina = "home";
        }

        if(in_array($pagina,$rotas)){
            if (!file_exists($pagina.".php")) {
                //echo utf8_decode("Página não encontrada!");

                http_response_code(404);
                exit();
            }
            return $pagina;
        }
        else{
            echo utf8_decode("Página não encontrada!");
            http_response_code(404);
            exit();
        }
    }
$pagina = ajustandoRotas();