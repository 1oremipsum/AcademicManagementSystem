<?php
    $auto_load = function($class){
        include($class.'.php');
    };

    spl_autoload_register($auto_load);  

    $app = new Application();
    $app->run();
?>