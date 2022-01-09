<?php

class ChessPiece {
    protected $x_position;
    protected $y_position;
    protected $piece_color;

   public function __construct($x_position, $y_position, $piece_color){
    $this->x_position = $x_position;
    $this->y_position = $y_position;
    $this->piece_color = $piece_color;
    }

    public function getColor() {
        if ($this->piece_color == 2){
            echo "The piece is black";
            return 2;
        } else if ($this->piece_color == 1) {
            echo "The piece is white";
            return 1;
        } else {
            return null;
        }
    } 
    public function getCaseColor() {
        if (($this->x_position%2 == 0 && $this->y_position%2 == 0) || ($this->x_position%2 != 0 && $this->y_position%2 != 0)){
            echo "black square";
            return 2;
        } else {
            echo "light square";
            return 1;
        }
    } 
}

?>