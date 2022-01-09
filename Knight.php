<?php 

require('ChessPiece.php');
class Knight extends ChessPiece {
    public function __construct($xPosition, $yPosition, $pieceColor){
        parent::__construct($xPosition, $yPosition, $pieceColor);
    }


    public function canGoTo($x,$y){
       
        if($x == ($this->xPosition+2) && $y == ($this->yPosition+1) ||
        $x == ($this->xPosition+1) && $y == ($this->yPosition+2)||
        $x == ($this->xPosition-2) && $y == ($this->yPosition-1)||
        $x == ($this->xPosition-1) && $y == ($this->yPosition-2)||
        $x == ($this->xPosition+2) && $y == ($this->yPosition-1)||
        $x == ($this->xPosition+1) && $y == ($this->yPosition-2)||
        $x == ($this->xPosition-2) && $y == ($this->yPosition+1)||
        $x == ($this->xPosition-1) && $y == ($this->yPosition+2)
        
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