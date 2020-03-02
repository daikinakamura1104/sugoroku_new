<?php

    require_once("Board.php");

    Class Dice extends Board{

        public $Dice = 0;

        public function __construct(){
            $this->Dice = 6;
        }

    }


    
?>