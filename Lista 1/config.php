<?php

namespace Config;
define('BASE_PATH', __DIR__);

class Config {
    
    static public function get_header() {
        include BASE_PATH . '..\assets\cabecalho.php';
    }
    
   static public function get_footer() {
        include BASE_PATH . '..\assets\rodape.php';
    }
}





?>