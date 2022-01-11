<?php 

require_once('ChessPiece.php');
class Bishop extends ChessPiece {
    public function __construct($xPosition, $yPosition, $pieceColor){
        parent::__construct($xPosition, $yPosition, $pieceColor);
    }


    public function canGoTo($x,$y,$diagonalLength){
       
        if(($x == $this->xPosition+$diagonalLength && $y == $this->yPosition+$diagonalLength) || ($x == $this->xPosition-$diagonalLength && $y == $this->yPosition-$diagonalLength) ) 
         {
            echo "La piece peut aller sur cette case !";
            return true;
            
        } else {
            echo "La piece ne peut pas aller sur cette case !";
            return false;
            
        }
    }
    

}