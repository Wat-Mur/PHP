<?php
/**
 * 配列のなかで一番大きい値を返す
 *
 * @param int $arr 要素同士を比較する配列
 * @param int $max_number 要素の中の最大値
 */
$arr = [14,3,40,99,20];

function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $val){
    if($val > $max_number) {
      $max_number = $val;
    } 
  }
  return $max_number;
}
    
//メイン処理
echo max_array($arr) . "\n";
?>
