<?php

    class Controller {
        public function loadViews($view, $dados = array()){
            extract($dados);

            require '../app/views/' . $view . '.php';
        }
    }