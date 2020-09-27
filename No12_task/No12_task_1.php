<?php
//初期値を定義する
$name = "村中 渉";
/*条件分岐
  nameが自分の名前であればtrue
  nameが自分の名前でなければfalse
*/
if($name == "村中 渉"){
  echo "私は".$name."です";
  echo "\n";
} else{
  echo $name."ではありません"; 
  echo "\n";
}
?>
