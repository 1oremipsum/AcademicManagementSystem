<?php
    namespace view;

    class MainView {
        private $fileName;
        private $header;
        private $footer;

        public function __construct($fileName, $header = 'header', $footer = 'footer') {
            $this->fileName = $fileName;
            $this->header = $header;
            $this->footer = $footer;
        }

        public function render($array = []){
            include('pages/template/'.$this->getHeader().'.php');
            include('pages/'.$this->fileName.'.php');
            include('pages/template/'.$this->getFooter().'.php');
        }

        public function getHeader(){
            return $this->header;
        }
        public function getFooter(){
            return $this->footer;
        }
    }
?>