<?php

    require_once("Game.php");

    Class Dice extends Game{
       
        public $Dice = 0;

        public function __construct(){
            $this->Dice = 6;
        }

    }


    
?>