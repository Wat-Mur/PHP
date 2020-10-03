<?php
$arr = array(1,3,5,7,9);

//配列の積を出す関数
function mult_array($arr){
  //配列の要素の積を返す
  $result = array_product($arr);
  return $result;
}

//メイン処理
echo mult_array($arr) . "\n";
?>
