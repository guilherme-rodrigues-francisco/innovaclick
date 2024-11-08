<?php

    class Core {
        public function executar(){
            $url = '/';

            if(isset($_GET['url'])){
                $url .= $_GET['url'];
            }

            // var_dump($url);

            $parametro = array();

            if(!empty($url) && $url != '/'){
                $url = explode('/', $url);
                array_shift($url);

                // var_dump($url);

                $controllerAtual = ucfirst($url[0]) . 'Controller';

                // var_dump($controllerAtual);
                array_shift($url);
                // var_dump($url);

                if(isset($url[0]) && !empty($url[0])){
                    $acaoAtual = $url[0];
                    var_dump('Ação atual: ' . $acaoAtual);
                    array_shift($url);
                }
                else {
                    $acaoAtual = 'index';
                    var_dump('Nenhuma ação: ' . $acaoAtual);
                }

                if(count($url) > 0){
                    $parametro = $url;
                }

            }
            else {
                $controllerAtual = 'HomeController';
                $actionAtual = 'index';
                // var_dump('Controller Atual: ' . $controllerAtual);
                // var_dump('Action atual: ' . $actionAtual);
            }

            if(!file_exists('../app/controllers/' . $controllerAtual . '.php') || !method_exists($controllerAtual, $actionAtual)){
                $controllerAtual = 'ErroController';
                $actionAtual = 'index';
            }

            // VERIFICA SE O ERROCONTROLLER ESTÁ FUNCIONANDO
            // var_dump($controllerAtual);
            // var_dump($actionAtual);

            $controller = new $controllerAtual();
            var_dump($controller);

            call_user_func_array(array($controller, $actionAtual), $parametro);
        }
    }