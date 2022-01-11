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
    public function canCapture($pieceToMove,$pieceToCapture){
        if($pieceToMove->getPieceColor()!=$pieceToCapture->getPieceColor() && $pieceToMove->canGoTo($pieceToCapture->getxPosition(),$pieceToCapture->getyPosition()) ){
            echo("the knight can capture the bishop");
            return true;
        } else {
            echo("the knight can't capture the bishop");
            return false;
        }
        
    }

  

    /**
     * Get the value of xPosition
     */ 
    public function getXPosition()
    {
        return $this->xPosition;
    }

    /**
     * Set the value of xPosition
     *
     * @return  self
     */ 
    public function setXPosition($xPosition)
    {
        $this->xPosition = $xPosition;

        return $this;
    }

    /**
     * Get the value of yPosition
     */ 
    public function getYPosition()
    {
        return $this->yPosition;
    }

    /**
     * Set the value of yPosition
     *
     * @return  self
     */ 
    public function setYPosition($yPosition)
    {
        $this->yPosition = $yPosition;

        return $this;
    }

    /**
     * Get the value of pieceColor
     */ 
    public function getPieceColor()
    {
        return $this->pieceColor;
    }

    /**
     * Set the value of pieceColor
     *
     * @return  self
     */ 
    public function setPieceColor($pieceColor)
    {
        $this->pieceColor = $pieceColor;

        return $this;
    }
}



?>