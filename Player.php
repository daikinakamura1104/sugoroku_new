<?php

    require_once("Dice.php");

    class Player extends Dice{
       
        public $name1 = 0;
        public $name2 = 0;
        
        public function __construct(){
            $num = rand(1,2);
            switch($num){
                case 1:
                    $this->name1 = "Taro";
                    $this->name2 = "jiro";
                    break;
                default:
                    $this->name1 = "Jiro";
                    $this->name2 = "Taro";
            }
        }
    }

    

   


?>
