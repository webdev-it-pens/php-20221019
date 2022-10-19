<?php 
// ARRAY -> NUMERIK & ASOSIATIF

$students = ['budi', 'yanto', 'jerry', 'andhika', 'jupri'];

// print_r($students[4])

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
            <li><?= $students[$i] ?></li>
        <?php } ?>
    </ul>

    <!-- <ul>
        <?php foreach($students as $tahu) { ?>
            <li><?= $tahu ?></li>
        <?php } ?>
    </ul> -->
    
</body>
</html>