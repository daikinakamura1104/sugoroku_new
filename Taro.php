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

    // foreach($numboard as $value){
    //     $correctnumboard = $value;
    // }
    
    

    $dice = new Dice();
    $dice = $dice->Dice;

    $player = new Player();
    $playername1 = $player ->name1;
    $playername2 = $player ->name2;

    echo "先攻のプレイヤーは".$playername1."です。";
    echo "後攻のプレイヤーは".$playername2."です・";

    $sumofdice1 = 0;
    $sumofdice2 = 0;
    
    
    while($sumofdice1 < $numgoal && $sumofdice2 < $numgoal){
        if($sumofdice1 < $numgoal){
            $i = 0;
            $numdice = rand(1,$dice);
            $sumofdice1 += $numdice;
            echo "出た目は".$numdice."\n";
            // if($sumofdice1 >= $numgoal){
            //     echo $playername1."はゴール。";
            //     break;
            // }
            if($sumofdice1 >= $numgoal){
                break ;
            }
            echo $playername1."は".$sumofdice1."マス目に進む"."\n";

            foreach($correctnumboard as $key=>$value){
                $val = intval($value);
                if($sumofdice1 == $key ){
                    if ($val < 0 ){
                        $sumofdice1 += $val;
                        echo "イベントが発生".$val."マス戻る"."\n";
                        echo $playername1."は".$sumofdice1."マス目に移動"."\n";
                        $i=1;
                    break;
                    }else if ($val > 0){
                        $sumofdice1 += $val;
                        echo "イベントが発生".$val."マス進む"."\n";
                        echo $playername1."は".$sumofdice1."マス目に移動"."\n"; 
                        $i=2;
                    break;
                    }else{
                        echo "イベントは発生しない".$sumofdice1."マス目に止まる。"."\n";
                        $i = 3;

                    break;
                    }
                }
            }
            if($sumofdice1 >= $numgoal){
                break ;
            }

            if($i != 3){
                foreach($correctnumboard as $key=>$value){
                    $val = intval($value);
                    if($sumofdice1 == $key ){
                        if ($val < 0 ){
                            $sumofdice1 += $val;
                            echo "イベントが発生".$val."マス戻る"."\n";
                            echo $playername1."は".$sumofdice1."マス目に移動"."\n";
                            $i=4;
                        break;
                        }else if ($val > 0){
                            $sumofdice1 += $val;
                            echo "イベントが発生".$val."マス進む"."\n";
                            echo $playername1."は".$sumofdice1."マス目に移動"."\n"; 
                            $i=5;
                        break;
                        }else{
                            echo "イベントは発生しない".$sumofdice1."マス目に止まる。"."\n";
                            $i=6;
                        break;
                        }
                    }
                }
            }
            if($sumofdice1 >= $numgoal){
                break ;
            }
        
            if($i!=3 && $i != 6){
                foreach($correctnumboard as $key=>$value){
                    $val = intval($value);
                    if($sumofdice1 == $key ){
                        if ($val < 0 ){
                            $sumofdice1 += $val;
                            echo "イベントが発生".$val."マス戻る"."\n";
                            echo $playername1."は".$sumofdice1."マス目に移動"."\n";
                        break;
                        }else if ($val > 0){
                            $sumofdice1 += $val;
                            echo "イベントが発生".$val."マス進む"."\n";
                            echo $playername1."は".$sumofdice1."マス目に移動"."\n"; 
                        break;
                        }else{
                            echo "イベントは発生しない".$sumofdice1."マス目に止まる。"."\n";
                        break;
                        }
                    }
                }
            }
            if($sumofdice1 >= $numgoal){
                break ;
            }
            
        }else{
            echo "サイコロを振れない";
        }
        if($sumofdice2 < $numgoal){
            $i=0;
            $numdice = rand(1,$dice);
            $sumofdice2 += $numdice;
            echo "出た目は".$numdice."\n";
            // if($sumofdice1 >= $numgoal){
            //     echo $playername1."はゴール。";
            //     break;
            // }
            if($sumofdice2 >= $numgoal){
                break ;
            }
            echo $playername2."は".$sumofdice2."マス目に進む"."\n";

            foreach($correctnumboard as $key=>$value){
                $val = intval($value);
                if($sumofdice2 == $key ){
                    if ($val < 0 ){
                        $sumofdice2 += $val;
                        echo "イベントが発生".$val."マス戻る"."\n";
                        echo $playername2."は".$sumofdice2."マス目に移動"."\n";
                        $i=1;
                    break;
                    }else if ($val > 0){
                        $sumofdice2 += $val;
                        echo "イベントが発生".$val."マス進む"."\n";
                        echo $playername2."は".$sumofdice2."マス目に移動"."\n"; 
                        $i=2;
                    break;
                    }else{
                        echo "イベントは発生しない".$sumofdice2."マス目に止まる。"."\n";
                        $i=3;
                    break;
                    }
                }
            }
            if($sumofdice2 >= $numgoal){
                break ;
            }
            if($i != 3){
                foreach($correctnumboard as $key=>$value){
                    $val = intval($value);
                    if($sumofdice2 == $key ){
                        if ($val < 0 ){
                            $sumofdice2 += $val;
                            echo "イベントが発生".$val."マス戻る"."\n";
                            echo $playername2."は".$sumofdice2."マス目に移動"."\n";
                            $i=4;
                        break;
                        }else if ($val > 0){
                            $sumofdice2 += $val;
                            echo "イベントが発生".$val."マス進む"."\n";
                            echo $playername2."は".$sumofdice2."マス目に移動"."\n"; 
                            $i=5;
                        break;
                        }else{
                            echo "イベントは発生しない".$sumofdice2."マス目に止まる。"."\n";
                            $i=6;
                        break;
                        }
                    }
                }
            }
            if($sumofdice2 >= $numgoal){
                break ;
            }
            
            if($i != 3 && $i != 6){
                foreach($correctnumboard as $key=>$value){
                    $val = intval($value);
                    if($sumofdice2 == $key ){
                        if ($val < 0 ){
                            $sumofdice2 += $val;
                            echo "イベントが発生".$val."マス戻る"."\n";
                            echo $playername2."は".$sumofdice2."マス目に移動"."\n";
                        break;
                        }else if ($val > 0){
                            $sumofdice2 += $val;
                            echo "イベントが発生".$val."マス進む"."\n";
                            echo $playername2."は".$sumofdice2."マス目に移動"."\n"; 
                        break;
                        }else{
                            echo "イベントは発生しない".$sumofdice2."マス目に止まる。"."\n";
                        break;
                        }
                    }
                }
            }
            if($sumofdice2 >= $numgoal){
                break ;
            }
            
        }
        
        }

        if($sumofdice1 >= $numgoal){
            echo $playername1."はゴールしました。";
        }else{
            echo $playername2."はゴールしました。";
        }
            
            // if ($val == 0){
            
            // }
    
    

        
    
        
        
        
        

        
    
        
        
        
        
        // $numdice = rand(1,$dice);
        // $sumofdice2 += $numdice;
        // echo "出た目は".$numdice."\n";
        // if($sumofdice2 >= $numgoal){
        //     echo $playername2."はゴール";
        //     break;
        // }
        // echo $playername2."は".$sumofdice2."マス目に移動"."\n";
        // for($i=1; $i<=3; $i++){
        //     foreach($numboard as $key=>$value){
        //         if ($sumofdice2 == $key + 1){
        //             if ($value < 0 ){
        //                 $sumofdice2 += intval($value);
        //                 echo "イベントが発生しました".$value."マス戻る"."\n";
        //                 echo $playername2."は".$sumofdice2."マス目に移動"."\n";
        //                 break;
        //             }else{
        //                 $sumofdice2 += intval($value);
        //                 echo "イベントが発生しました".$value."マス進む"."\n";
        //                 echo $playername2."は".$sumofdice2."マス目に移動"."\n";
        //                 break;
        //             }
        //         }
        //     }
        //     if($sumofdice2 >= $numgoal){
        //         echo $playername2."はゴール";
        //         break;
        //     }
        // }
        

?>
