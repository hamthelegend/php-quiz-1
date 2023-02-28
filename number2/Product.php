<?php

    abstract class Product {

        protected $productName;
        protected $price;

        public function __construct($productName, $price) {
            $this->productName = $productName;
            $this->price = round($price, 2);
        }


        abstract function display();

        public function getProductName() {
            return $this->productName;
        }


        public function getPrice() {
            return $this->price;
        }

        public function setPrice($price): void {
            $this->price = $price;
        }

    }

    class Book extends Product {
        protected $author;
        protected $genre;

        public function __construct($productName, $price, $author, $genre) {
            parent::__construct($productName, $price);
            $this->author = $author;
            $this->genre = $genre;
        }

        function display() {
            return "Name: ".$this->productName.
                "<br>Author: ".$this->author.
                "<br>Genre: ".$this->genre.
                "<br>Price: ".$this->price;
        }

        public function getAuthor() {
            return $this->author;
        }

        public function getGenre() {
            return $this->genre;
        }

    }

    class Movie extends Product {
        protected $director;
        protected $rating;

        public function __construct($productName, $price, $director, $rating) {
            parent::__construct($productName, $price);
            $this->director = $director;
            $this->rating = $rating;
        }

        function display() {
            return "Name: " . $this->productName .
                "<br>Director: " . $this->director .
                "<br>Rating: " . $this->rating .
                "<br>Price: " . $this->price;
        }

        public function getDirector() {
            return $this->director;
        }

        public function getRating() {
            return $this->rating;
        }

        public function setRating($rating): void {
            $this->rating = $rating;
        }

    }