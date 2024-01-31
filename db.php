<?php
    // Includo i file delle classi
    require_once __DIR__.'/Models/Prodotto.php';
    require_once __DIR__.'/Models/Accessori.php';


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