<?php 
$products = [
    [
        "name" => "Redmi Note 17 8/128",
        "store" => "Oke Shop",
        "price" => 3250000,
        "img" => "hp.jpg"
    ],
    [
        "name" => "Le Minerale 600ml",
        "store" => "Indoapril",
        "price" => 3000,
        "img" => "leminerale.jpg"
    ],
    [
        "price" => 1500000,
        "name" => "Meja Belajar Anak",
        "store" => "Meuble Berkah",
        "img" => "meja.jpg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array 2D</title>
    <style>
        *{ margin: 0; padding: 0; }
        body{ font-family: sans-serif; }
        .container{
            display: flex;
            margin: 30px 20px;
        }
        .card{
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 1px 1px 7px gray;
            margin: 0 8px;
            width: 200px;
        }
        img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-body{
            padding: 10px 15px;
        }
        .price {
            margin: 10px 0;
        }
        .store {
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php foreach($products as $product) : ?>
            <div class="card">
                <img src="img/<?= $product['img']; ?>" alt="">
                <div class="card-body">
                    <h4 class="name"><?= $product['name']; ?></h4>
                    <p class="price">Rp <?= $product['price']; ?></p>
                    <p class="store"><?= $product['store']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>