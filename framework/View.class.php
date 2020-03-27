<?php
    // Framework
    class View {
        // Attributes
        private $param;
    

        function __Construct() {
            $this->param = array();
        }
        
        function assign(string $varName,$value) {
            $this->param[$varName] = $value;
        }

        // Affiche la vue
        function display(string $filename) {
            $p = "../view/".$filename;

            foreach ($this->param as $key => $value) {
                $$key = $value;
            }

            include($p);
        }
    }