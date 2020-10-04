<?php
/**
 * 引数を2倍にして返す
 *
 * @param int number	2倍にする値
 */
function twice_number($number){
  return $number * 2;
}

//メイン処理
echo twice_number(4) . "\n";
?>
