<?php
    
    class Game {

        public function __construct(){
            
        }

        public function start($playername1,$playername2,$correctnumboard,$numgoal,$dice){
            
            $sumofdice1 = 0;
            $sumofdice2 = 0;

            echo "すごろくゲームを始めます。1回のサイコロ振りでイベントは最大3回起こります。"."\n";
            echo "ゴールは".$numgoal."マス目です。"."\n";

            echo "先攻のプレイヤーは".$playername1."です。"."\n";
            echo "後攻のプレイヤーは".$playername2."です。"."\n";

                    
            while($sumofdice1 < $numgoal && $sumofdice2 < $numgoal){
                if($sumofdice1 < $numgoal){
                    $i = 0;
                    $numdice = rand(1,$dice);
                    $sumofdice1 += $numdice;
                    echo $playername1."の出た目は".$numdice."\n";
                    if($sumofdice1 >= $numgoal){
                        break ;
                    }
                    echo $playername1."は".$sumofdice1."マス目に進む"."\n";

                    foreach($correctnumboard as $key=>$value){
                        $val = intval($value);
                        if($sumofdice1 == $key ){
                            if ($val < 0 ){
                                $sumofdice1 += $val;
                                echo "イベントが発生".abs($val)."マス戻る"."\n";
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
                                    echo "イベントが発生".abs($val)."マス戻る"."\n";
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
                                    echo "イベントが発生".abs($val)."マス戻る"."\n";
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
                    echo $playername2."の出た目は".$numdice."\n";
                    if($sumofdice2 >= $numgoal){
                        break ;
                    }
                    echo $playername2."は".$sumofdice2."マス目に進む"."\n";
        
                    foreach($correctnumboard as $key=>$value){
                        $val = intval($value);
                        if($sumofdice2 == $key ){
                            if ($val < 0 ){
                                $sumofdice2 += $val;
                                echo "イベントが発生".abs($val)."マス戻る"."\n";
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
                                    echo "イベントが発生".abs($val)."マス戻る"."\n";
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
                                    echo "イベントが発生".abs($val)."マス戻る"."\n";
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
                    
        }
        

    }
    
?>