<?php
    namespace view;

    class StudentView {
        private $fileName;

        public function __construct(String $fileName) {
            $this->fileName = $fileName;
        }

        public function render(){
            include('pages/'.$this->fileName.'.php');
        }
    }
?>