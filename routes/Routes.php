<?php
    class Router {
        public $route;

        public function __construct($route){
            $login = new ViewController();
            $login->load_view($route);
        }

        public function __destruct(){
            // unset($this);
        }
    }
?>
