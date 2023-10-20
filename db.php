<?php

$products = [];

 array_push(
    $products,
    $collare_gatto = new Product("per Gatto", "./assets/images/collare_gatto.webp", "'Collare Per Gatto'", "5,50 Euro", "./assets/images/icon_cat.jpg", "'Accessori'"),

    $collare_cane = new Product("per Cane", "./assets/images/collare_cane.webp", "'Collare per Cane'", "6,50 Euro", "./assets/images/icon_dog.jpg", "'Accessori'"),

    $crocchette_gatto = new Product("per Gatto", "./assets/images/crocchette gatto.webp", "'Crocchette per Gatto'", "12,50 Euro", "./assets/images/icon_cat.jpg", "'Cibo'" ),

    $crocchette_cane = new Product("per Cane", "./assets/images/crocchette_cane.webp", "'Crocchette per Cane'", "14,50 Euro", "./assets/images/icon_dog.jpg", "'Cibo'" ),

    $lettiera_gatto = new Product("per Gatto", "./assets/images/lettiera.webp", "'Lettiera per Gatto'", "7,50 Euro", "./assets/images/icon_cat.jpg", "'Toilette'" ),

    $osso_cane = new Product("per Cane", "./assets/images/osso cane.webp", "'Osso per Cane'", "3,50 Euro", "./assets/images/icon_dog.jpg", "'Svago'" ), 

    $cuccia_gatto = new Product("per Gatto", "./assets/images/cuccia gatto.webp", "'Cuccia per Gatto'", "22,50 Euro", "./assets/images/icon_cat.jpg", "'Riposo'" ),

    $cuccia_cane = new Product("per Cane", "./assets/images/cuccia cane.webp", "'Cuccia per Cane'", "27,50 Euro", "./assets/images/icon_dog.jpg", "'Riposo'" ),

    $gioco_gatto = new Product("Gatto", "./assets/images/pallina-gatto.jpg", "'Gioco per Gatto'", "2,50 Euro", "./assets/images/icon_cat.jpg", "Giocattoli" ),

    $gioco_cane = new Product("Cane", "./assets/images/gioco cane.webp", "'Gioco per Cane'", "7,50 Euro", "./assets/images/icon_dog.jpg", "'Giocattoli'" ),
    
);


?>
