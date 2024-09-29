<?php
    namespace controller;
    use view\StudentView;

    class StudentController extends Controller{

        public function __construct() {
            $this->view = new StudentView('gerenciar-alunos');
        }

        public function init(){
            $this->view->render();
        }
    }
?>