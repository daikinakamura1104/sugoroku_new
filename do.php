<?php
    require("Board.php");
    require("Player.php");
    require("Dice.php");
    require("Game.php");

    $board = new Board();
    $numboard = $board->numofboard;
    $numgoal =  $board->numofgoal;


    $correctnumboard = [];

    $i=1;
    foreach($numboard as $key => $value){
        $correctnumboard[$i++] = $value;
    }

    $player = new Player();
    $playername1 = $player ->name1;
    $playername2 = $player ->name2;

    $dice = new Dice();
    $dice = $dice->Dice;

    


    $game = new Game();
    $game->start($playername1,$playername2,$correctnumboard,$numgoal,$dice);
  
?>