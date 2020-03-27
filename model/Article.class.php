<?php
    // Article class
    class Article {
        // Attributes
        private $id;
        private $title;
        private $price;
        private $cover;
        private $category;
        private $description;
    

        // Constructor
        function __construct($id, $title, $price, $cover, $category, $description) {
            $this->set($id, $title, $price, $cover, $category, $description);
        }

        // Getters
        function getID(): int {
            return $this->id;
        }

        function getTitle(): string {
            return $this->title;
        }

        function getPrice(): float {
            return $this->price;
        }

        function getCover(): string {
            return $this->cover;
        }

        function getCategory(): int {
            return $this->category;
        }

        function getDescription(): string {
            return $this->description;
        }

        // Setters
        function set($id, $title, $price, $cover, $category, $description) {
            $this->id = $id;
            $this->title = $title;
            $this->price = $price;
            $this->cover = $cover;
            $this->category = $category;
            $this->description = $description;
        }
    }