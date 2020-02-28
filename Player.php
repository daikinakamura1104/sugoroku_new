<?php

    require_once("Dice.php");

    class Player extends Dice{
       
        public $name1 = 0;
        public $name2 = 0;
        public $i = 0;
        public $j = 0;

        public function __construct(){
            $num = rand(1,2);
            switch($num){
                case 1:
                    $this->name1 = "Taro";
                    $this->name2 = "jiro";
                    $this->i = 1;
                    break;
                default:
                    $this->name1 = "Jiro";
                    $this->name2 = "Taro";
                    $this->j = 1;
            }
            // if ($num == 1){
            //     $this->name1 = "Taro";
            // }else{
            //     $this->name2 = "Jiro";
            // }
            // if ($num == 2){
            //     $this->name2 = "Jiro";
            // }else{
            //     $this->name1 = "Taro";
            // }
        }
    }

   


?>
