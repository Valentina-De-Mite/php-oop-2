<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. 
-->



<?php

include __DIR__ . '/Models/classProduct.php';
include __DIR__ . '/db.php';




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .logo{
            width: 120px;
            border-radius: 50px;

        }

        header{
            background-color: rgba(185,221,234,255);
        }
    </style>
    <title>php-oop-2</title>
</head>
<body>
    
<header>
    <nav class="navbar navbar-expand-sm  shadow">
          <div class="container">
            <img src="./assets/images/logo.png" class="logo me-5" alt="logo" srcset="">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prodotti</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Prodotti per Cane</a>
                            <a class="dropdown-item" href="#">Prodotti per Gatto</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Cerca un prodotto">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Cerca</button>
                </form>
            </div>
      </div>
    </nav>
    
</header>

<main>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product) : ?>


            <div class="col-4">
            <div class="card p-3 d-flex mt-5 shadow">
                            <!-- <img src="./assets/images/icon_cat.jpg" alt="" srcset=""> -->
                            <img src=" <?= $product->getImage()?>" class="img-fluid mb-3" alt="" srcset="">
                            <div class="d-flex align-items-center">
                            <p>Categoria: <?= $product->getCategory() ?></p>
                            <img src="<?= $product->getIcon()?>" alt="" class="w-25" srcset="">
                            </div>
                            
                            <p>Prodotto: <?= $product->getTitle() ?></p>
                            
                            <p>Costo: <?= $product->getPrice() ?></p>
                        
                            <p>Tipologia: <?= $product->getType() ?></p>
                            
                        </div> 
            </div>
    
        <?php endforeach; ?>
    </div>
</div>



</main>







<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>


