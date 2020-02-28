<?php

    require_once("Player.php");
    require_once("Dice.php");

    $board = new Board();
    $numboard = $board->numofboard;
    $numgoal =  $board->numofGoal;
    var

    $dice = new Dice();
    // var_dump($dice);
    $dice = $dice->Dice;
    // var_dump($dice);

    $player = new Player();
    $playername1 = $player ->name1;
    $playername2 = $player ->name2;
    $ioffirst = $player->i;
    $joffirst = $player->j;

    echo "先攻のプレイヤーは".$playername1."です。";
    echo "後攻のプレイヤーは".$playername2."です・";

    $sumofdiceJiro = 0;
    $sumofdiceTaro = 0;
    

    if($playername1 = "Taro" ){
        if ($sumofdiceTaro || $sumofdiceJiro = $numgoal){
            if ($sumofdiceTaro = $numgoal){
                echo "Taroはゴールしました";
            }else{
                echo "Jiroはゴールしました";
            }
        }
        $numdice = rand(1,6);
        $sumofdiceTaro += $numdice;
        echo "出た目は".$numdice."です。";
        echo "Taroは".$sumofdiceTaro."マス目に進みます";
        // for文もしくはwhile文でどちらかがゴールしているかが限度になるようにする
        for($i=1; )
        foreach($numboard as $key=>$value){
            if ($sumofdiceTaro == $key){
                if ($value < 0 ){
                    $sumofdiceTaro += intval($value);
                    var_dump($value);
                    echo "イベントが発生しました".$value."マス戻るイベントです";
                    echo "Taroは".$sumofdiceTaro."マス目に戻ります";
                    break;
                }else{
                    $sumofdiceTaro += intval($value);
                    var_dump($value);
                    echo "イベントが発生しました".$value."マス進むイベントです";
                    echo "Taroは".$sumofdiceTaro."マス目に向かいます";
                    break;
                }
               
            }
        }

    }else if ($){
        $sumofdiceJiro　+= rand(1,6);
       foreach($numboard as $key=>$value){
           if ($sumofdiceJiro == $key){
               $sumofdiceJiro += $value;
               break;
           }
       }
    }

   

?>