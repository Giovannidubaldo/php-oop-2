<?php
    require_once __DIR__.'/db.php';
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