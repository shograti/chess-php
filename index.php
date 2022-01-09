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
/*     require('ChessPiece.php');
    require('Knight.php');

    $white_piece_on_light_square = new ChessPiece(3,1,2);
    $white_piece_on_light_square->getColor();
    $white_piece_on_light_square->getCaseColor();
    
    $white_knight_from_b1_to_f3 = new Knight(2,1,1);

    if($white_knight_from_b1_to_f3->isOnBoard(1,1)){
        $white_knight_from_b1_to_f3->canGoTo(1,3);
    } else {
        echo"Le cavalier est hors du jeu, il ne peut pas aller sur cette case";
    };
 */
    require ('Bishop.php');

    $whiteBishopOnLightSquare = new Bishop(6,1,1);
    $whiteBishopOnLightSquare->canGoTo(7,2,1);
    $whiteBishopOnLightSquare->canGoTo(8,3,2);
    $whiteBishopOnLightSquare->canGoTo(8,8,8);


    

    ?>
</body>
</html>