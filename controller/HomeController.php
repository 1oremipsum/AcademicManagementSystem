<?php
    namespace controller;

    class HomeController extends Controller{

        public function __construct() {
            $this->view = new \view\MainView('home');
        }
    
        public function init(){
            $this->view->render(array('title'=>'Home'));
        }
    }
?>