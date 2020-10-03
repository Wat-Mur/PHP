<?php
//引数の和を出す関数
function plus_number($a,$b){
  //仮引数$aと$bをの和を返す
  $print_number = $a + $b;
  return $print_number;
}

//メイン処理
echo plus_number(1,10) . "\n";  
?>
