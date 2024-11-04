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

                var_dump($controllerAtual);
            }
        }
    }