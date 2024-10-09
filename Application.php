<?php
    class Application {
        public function run(){
            $url = (isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home');
            $url = ucfirst($url);
            $url.="Controller"; 
            if(file_exists('controller/'.$url.'.php')){
                $className = "controller\\".$url;
                $controller = new $className;
                $controller->init();
            }else{
                die ("Error: Controller not found");
            }
        }
    }
?>