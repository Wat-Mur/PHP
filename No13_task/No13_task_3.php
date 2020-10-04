<?php
/**
 * 配列の積を返す
 *
 * @param int $arr 要素の積を出す配列
 * @param int $sum 積の合計 
 */
$arr = [1,3,5,7,9];
function mult_array($arr){
  $sum = 1;
  foreach ($arr as $val){
    $sum *= $val; 
  }
  echo $sum;
}

//メイン処理
echo mult_array($arr) . "\n";
?>
