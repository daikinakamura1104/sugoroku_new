<?php
    
    require_once("Player.php");
    require_once("Dice.php");

    $board = new Board();
    $numboard = $board->numofboard;
    $numgoal =  $board->numofGoal;


    $correctnumboard = [];

    $i=1;
    foreach($numboard as $key => $value){
        $correctnumboard[$i++] = $value;
    }

    $dice = new Dice();
    $dice = $dice->Dice;

    $player = new Player();
    $playername1 = $player ->name1;
    $playername2 = $player ->name2;

    echo "先攻のプレイヤーは".$playername1."です。";
    echo "後攻のプレイヤーは".$playername2."です・";

    echo ($player->playgame($playername1,$playername2,$correctnumboard,$numgoal,$dice));
    
?>
