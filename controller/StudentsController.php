<?php
    namespace controller;

    class StudentsController extends Controller{

        public function __construct() {
            $this->view = new \view\MainView('gerenciar-alunos');
        }

        public function init(){
            $this->view->render(array('title'=>'Gerenciar Alunos'));
        }
    }
?>