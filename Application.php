<?php
    class Application {
        public function run(){
            $url = (isset($_GET['url']) ? $_GET['url'] : "Home");
            $url = ucfirst($url);
        }
    }
?>