<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require('ChessPiece.php');
    $white_piece_on_light_square = new ChessPiece(3,1,2);
    $white_piece_on_light_square->getColor();
    $white_piece_on_light_square->getCaseColor();
    
    ?>
</body>
</html>