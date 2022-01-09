<?php

class ChessPiece {
    protected $xPosition;
    protected $yPosition;
    protected $pieceColor;

   public function __construct($xPosition, $yPosition, $pieceColor){
    $this->xPosition = $xPosition;
    $this->yPosition = $yPosition;
    $this->pieceColor = $pieceColor;
    }

    public function getColor() {
        if ($this->pieceColor == 2){
            echo "The piece is black";
            return 2;
        } else if ($this->pieceColor == 1) {
            echo "The piece is white";
            return 1;
        } else {
            return null;
        }
    } 
    public function getCaseColor() {
        if (($this->xPosition%2 == 0 && $this->yPosition%2 == 0) || ($this->xPosition%2 != 0 && $this->yPosition%2 != 0)){
            echo "black square";
            return 2;
        } else {
            echo "light square";
            return 1;
        }
    } 
    public function isOnBoard($x,$y){
        if($x<1 || $x > 8 || $y<1 || $y > 8){
            echo "false !";
            return false;
            
        } else {
            echo "true !";
            return true;
            
        }
    }

}



?>