<?php
    class Board{

        public $numofboard = array();
        public $numofGoal = 0;

        public function __construct(){
            if (($handle = fopen("Board.csv - シート1.csv", "r")) !== FALSE) {
                // 1行ずつfgetcsv()関数を使って読み込む
                // 配列に代入して、全体のマス目、もしあればイベントのマス目を分ける
                while (($data = fgetcsv($handle))) {
                    foreach ($data as $value) {
                        $numofboard[] = $value;
                    }
                }
                fclose($handle);
                $this->numofboard = $numofboard;
                $this->numofGoal = count($numofboard);
                
            }
        }
    }

    
   
?>