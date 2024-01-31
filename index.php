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

    // Definisco la sottoclasse "Accessori", figlia della classe "prodotto"
    class Accessori extends Prodotto{
        $type;
        $description;

        function __construct($_name, $_price, $_img, $_category, $_type, $_description){
            parent::__construct($_name, $_price, $_img, $_category);
            $this -> type = $_type;
            $this -> description = $_description;
        }
    }

    // Definisco la classe "categoria" per aggiungerla alla classe "prodotto" attraverso PHP composition
    class Categoria{
        public $animal;

        function __construct($_animal){
            $this -> animal = $_animal;
        }
    }

    // Creo istanze della classe Categoria
    $cane = new Categoria('Cane');
    $gatto = new Categoria('Gatto');
    $pesci = new Categoria('Pesci');
    $uccelli = new Categoria('Uccelli');
    
?>