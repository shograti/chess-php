<?php
require('Bishop.php');
require('Knight.php');

$bishops = [
    $whiteBishopOnA1 = new Bishop(1,1,1),
    $whiteBishopOnC1 = new Bishop(3,1,1),
    $whiteBishopOnE1 = new Bishop(5,1,1),
    $whiteBishopOnG1 = new Bishop(7,1,1)
];

$knights = [
    $whiteKnightOnB1 = new Knight(2,1,1),
    $whiteKnightOnD1 = new Knight(4,1,1),
    $whiteKnightOnF1 = new Knight(6,1,1),
    $whiteKnightOnH1 = new Knight(8,1,1)
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <?php
    foreach($knights as $knight){
        var_dump($knight);
        echo("<br>");
        $knight->canGoTo(5,5);
        echo("<br>");
    }
    foreach($bishops as $bishop){
        var_dump($bishop);
        echo("<br>");
        $bishop->canGoTo(5,5,4);
        echo("<br>");
      }
  ?>
</head>
<body>
    
</body>
</html>