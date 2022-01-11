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
/*     require ('Bishop.php');

    $whiteBishopOnLightSquare = new Bishop(6,1,1);
    $whiteBishopOnLightSquare->canGoTo(7,2,1);
    $whiteBishopOnLightSquare->canGoTo(8,3,2);
    $whiteBishopOnLightSquare->canGoTo(8,8,8); */

/*     require('King.php');

    $whiteKingOnE1 = new King(5,1,1);

    $whiteKingOnE1->canGoTo(1,1) */

/* require("Pawn.php");
$pawnOnE2 = new Pawn(5,2,1);
$pawnOnE2->canGoTo(5,4,true);
$pawnOnE2->canGoTo(5,3,true);
$pawnOnE2->canGoTo(5,4,false);
$pawnOnE2->canGoTo(5,5,true);
     */
    require('Knight.php');
    require ('Bishop.php');
    $darkBishopOnLightSquare = new Bishop(3,3,2);
    $white_knight_on_b1 = new Knight(2,1,1);
    var_dump($darkBishopOnLightSquare->getxPosition());
    var_dump($darkBishopOnLightSquare->getyPosition());
    var_dump($darkBishopOnLightSquare->getPieceColor());
    var_dump($white_knight_on_b1->getxPosition());
    var_dump($white_knight_on_b1->getyPosition());
    var_dump($white_knight_on_b1->getPieceColor());

/*     if($white_knight_on_b1->getPieceColor()!=$darkBishopOnLightSquare->getPieceColor() && $white_knight_on_b1->canGoTo($darkBishopOnLightSquare->getxPosition(),$darkBishopOnLightSquare->getyPosition()) ){
        echo("the knight can capture the bishop");
        return true;
    } else {
        echo("the knight can't capture the bishop");
        return false;
    }*/

    $white_knight_on_b1->canCapture($white_knight_on_b1,$darkBishopOnLightSquare)
    ?> 
</body>
</html>