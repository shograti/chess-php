<?php 

require('ChessPiece.php');
class Knight extends ChessPiece {
    public function __construct($x_position, $y_position, $piece_color){
        parent::__construct($x_position, $y_position, $piece_color);
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

    public function canGoTo($x,$y){
       
        if($x == ($this->x_position+2) && $y == ($this->y_position+1) ||
        $x == ($this->x_position+1) && $y == ($this->y_position+2)||
        $x == ($this->x_position-2) && $y == ($this->y_position-1)||
        $x == ($this->x_position-1) && $y == ($this->y_position-2)||
        $x == ($this->x_position+2) && $y == ($this->y_position-1)||
        $x == ($this->x_position+1) && $y == ($this->y_position-2)||
        $x == ($this->x_position-2) && $y == ($this->y_position+1)||
        $x == ($this->x_position-1) && $y == ($this->y_position+2)
        
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