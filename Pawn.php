<?php 

require_once('ChessPiece.php');
class Pawn extends ChessPiece {




    public function __construct($xPosition, $yPosition, $pieceColor){
        parent::__construct($xPosition, $yPosition, $pieceColor);
    }


    public function canGoTo($x,$y, $isFirstMove){
        if($x == $this->xPosition && ($y== $this->yPosition+1 || $y==$this->yPosition+2) && $isFirstMove == true ){
                echo "La piece peut aller sur cette case ! (first move)";
                return true;

        } else if ($x == $this->xPosition && $y== $this->yPosition+1) {
            echo "La piece peut aller sur cette case !";
            return true;
            
        } else {
            echo "La pièce ne peut pas aller sur cette case";
            return false;
        }
    }
    }