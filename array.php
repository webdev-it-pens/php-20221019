<?php 
$numbers = [1,23,5,6,21,76,9,4,0, -33];
// var_dump($numbers);
// print_r($numbers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            height: 50px;
            width: 50px;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 5px;
            background-color: skyblue;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php for($i=0; $i<count($numbers); $i++) : ?>
        <div class="kotak"><?= $numbers[$i]; ?></div>
        <?php endfor; ?>
        
    <br>
        
    <?php foreach($numbers as $number) : ?>
        <div class="kotak"><?= $number; ?></div>
    <?php endforeach; ?>
</body>
</html>