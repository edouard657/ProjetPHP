<?php
    // Category Class
    class Category {
        // Attributes
        private $id;
        private $title;
    
    
        // Constuctor
        function __Construct($id, $title) {
            $this->set($id, $title);
        }
        
        // Getters
        function getID(): int {
            return $this->id;
        }

        function getTitle(): string {
            return $this->title;
        }

        // Setter
        function set($id, $title) {
            $this->id = $id;
            $this->title = $title;
        }
    }