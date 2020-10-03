<?php
$arr = [14,3,40,99,20];

//配列のなかで一番大きい値を返す関数
function max_array($arr){
  //配列の要素を比較し一番大きい値を返す
  $max_number = $arr[0];
  foreach($arr as $a){
    $max_number = max($max_number,$a);
  }
  return $max_number;
}
    
//メイン処理
echo max_array($arr) . "\n";
?>
