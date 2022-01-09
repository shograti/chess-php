<?php 

require_once('ChessPiece.php');
class King extends ChessPiece {
    public function __construct($xPosition, $yPosition, $pieceColor){
        parent::__construct($xPosition, $yPosition, $pieceColor);
    }


    public function canGoTo($x,$y){
       
        if(
          ($x == $this->xPosition+1 && $y == $this->yPosition+1) ||
          ($x == $this->xPosition+1 && $y == $this->yPosition) ||
          ($x == $this->xPosition+1 && $y == $this->yPosition-1)||
          ($x == $this->xPosition && $y == $this->yPosition+1)||
          ($x == $this->xPosition && $y == $this->yPosition-1)||
          ($x == $this->xPosition-1 && $y == $this->yPosition+1)||
          ($x == $this->xPosition-1 && $y == $this->yPosition)||
          ($x == $this->xPosition-1 && $y == $this->yPosition-1)                
          ) 
         {
            echo "La piece peut aller sur cette case !";
            return true;
            
        } else {
            echo "La piece ne peut pas aller sur cette case !";
            return false;
            
        }
    }
}