<?php
    // // Includo la classe Prodotto
    // include_once __DIR__.'/Prodotto.php';

     // Definisco la sottoclasse "Accessori", figlia della classe "prodotto"
     class Accessori extends Prodotto{
        public $type;
        public $description;

        function __construct($_name, $_price, $_img, $_category, $_type, $_description){
            parent::__construct($_name, $_price, $_img, $_category);
            $this -> type = $_type;
            $this -> description = $_description;
        }
    }
?>