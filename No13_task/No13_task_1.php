<?php
//引数を2倍にして返す関数
function twice_number($number){
  //引数を2倍にして返す
  $print_number = $number * 2;

  return $print_number;
}

//メイン処理
echo twice_number(4) . "\n";
?>
