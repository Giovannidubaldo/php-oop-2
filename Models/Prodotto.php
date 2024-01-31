<?php
    // Definisco la classe 'padre' prodotto
    class Prodotto{
        public $name;
        public $price;
        public $img;
        public $category;

        // Definisco il costruttore della classe prodotto
        function __construct($_name, $_price, $_img, Categoria $_category){
            $this -> name = $_name;
            $this -> price = $_price;
            $this -> img = $_img;
            $this -> category = $_category;
        }
        
    }

    // Definisco la classe "categoria" per aggiungerla alla classe "prodotto" attraverso PHP composition
    class Categoria{
        public $animal;

        function __construct($_animal){
            $this -> animal = $_animal;
        }
    }
?>