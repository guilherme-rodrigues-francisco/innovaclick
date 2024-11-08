<?php

    define("BASE_URL", "https://localhost/innovaclick-gui/");
   //  define("BASE_URL", "https://kioficina.smpsistema.com.br/");

    define("DB_HOST", "localhost");
    define("DB_NAME", "db_innovaclick");
    define("DB_USER", "root");
    define('DB_PASS', '*******');

    spl_autoload_register(function($classe){
       if(file_exists('../app/controllers/' . $classe . '.php')){
        require_once('../app/controllers/' . $classe . '.php');
       }
       
       if(file_exists('../app/models/' . $classe . '.php')){
        require_once('../app/models/' . $classe . '.php');
       }

       if(file_exists('../core/' . $classe . '.php')){
        require_once('../core/' . $classe . '.php');
       }
    });