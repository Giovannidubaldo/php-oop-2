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

    // Creo istanze della classe Categoria
    $cane = new Categoria('Cane');
    $gatto = new Categoria('Gatto');
    $pesci = new Categoria('Pesci');
    $uccelli = new Categoria('Uccelli');

    // // Creo le istanze della classe prodotto utilizzando la sottoclasse accessori
    $prodotto_1 = new Accessori('Royal Canin Mini Adult', 8.45, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', $cane, 'Cibo', 'Croccantini per cani');
    $prodotto_2 = new Accessori('Almo Nature Holistic Maintenance', 11.60, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', $cane, 'Cibo', 'Croccantini per cani');
    $prodotto_3 = new Accessori('Almo Nature Cat Daily Lattina', 17.28, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', $gatto, 'Cibo', 'Cibo in scatola per gatti');
    $prodotto_4 = new Accessori('Mangime per Pesci Guppy in Fiocchi', 3.41, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', $pesci, 'Cibo', 'Mangime per pesci');
    $prodotto_5 = new Accessori('Voliera Wilma in Legno', 40.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', $uccelli, 'Accessorio', 'Gabbia per uccelli in legno');
    $prodotto_6 = new Accessori('Cartucce Filtranti per Filtro EasyCrystal', 15.25, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', $pesci, 'Accessorio', 'Trattamento acqua');
    $prodotto_7 = new Accessori('Kong Classic', 8.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', $cane, 'Gioco', 'Gioco per animali');
    $prodotto_8 = new Accessori('Topini di peluche Trixie', 4.90, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', $gatto, 'Gioco', 'Gioco per animali');

    // // Creo l'array di prodotti
    $products = [
        $prodotto_1,
        $prodotto_2,
        $prodotto_3,
        $prodotto_4,
        $prodotto_5,
        $prodotto_6,
        $prodotto_7,
        $prodotto_8
    ];
    // echo "<pre>";
    // var_dump($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Php OOP 2</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <h1 class="fw-bolder text-uppercase">Arcaplanet</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach($products as $product) { ?>
                    <div class="col-3 my-5">
                        <div class="card h-100">
                            <img src=<?php echo $product->img ?> class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title mb-4"><?php echo $product->name ?></h5>
                                <p class="card-text"> <?php echo "Prezzo : ".$product->price."€" ?> </p>
                                <p class="card-text"> <?php echo "Categoria : ".$product->category->animal ?> </p>
                                <p class="card-text"> <?php echo "Tipo : ".$product->type ?> </p>
                                <p class="card-text"> <?php echo "Descrizione : ".$product->description ?> </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>