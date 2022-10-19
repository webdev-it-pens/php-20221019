<?php 
// ARRAY -> NUMERIK & ASOSIATIF

$students = [
    ['Budi', 312050006, 'Teknik Informatika'],
    ['Yani', 312050017, 'Teknik Nuklir'],
    ['Satriyo', 31205788, 'Tata Boga'],
];

// print_r($students[2][2]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php for($i=0; $i < count($students); $i++) { ?>
            <li><?= $students[$i][0] ?></li>
            <li><?= $students[$i][1] ?></li>
            <li><?= $students[$i][2] ?></li>
            <br>
        <?php } ?>
    </ul>

    <!-- <ul>
        <?php foreach($students as $student) { ?>
            <li>
                <?= $student[0] ?> <br>
                <?= $student[1] ?> <br>
                <?= $student[2] ?>
            </li>
        <?php } ?>
    </ul> -->
    
    <!-- <?= $students[0]; ?> -->
</body>
</html>