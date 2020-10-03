<?php
echo "////////////////////////////////// \n";
echo "\n";
//strip_tagsを使う
echo "### strip_tagsテスト ### \n";
echo "\n";
$str = "<p><?php echo 1 ?>テスト<br>aaa</p>";
echo strip_tags($str) . "\n";
echo "\n";
echo "////////////////////////////////// \n";
echo "\n";

//array_pushを使う
echo "### array_puohテスト ### \n";
echo "\n";
$fruits = ["apple","banana","lemon"];
echo "--要素を追加前-- \n";
print_r($fruits);

array_push($fruits,"orange","grape");
echo "\n";
echo "--要素を追加後-- \n";
print_r($fruits);
echo "\n";
echo "////////////////////////////////// \n";
echo "\n";

//array_margeを使う
echo "### array_margeテスト ### \n";
echo "\n";
$array1 = [1,2,3];
$array2 = [100,200,300];

$array = array_merge($array1,$array2);
print_r($array);
echo "\n";
echo "////////////////////////////////// \n";
echo "\n";

//timeを使う
echo "### timeテスト ### \n";
echo "\n";
//現在時刻を取得する
echo "現在のunixタイムは:" . time() . "\n" ;

//1週間後の時刻を取得する
$new_time = time() + (7 * 24 * 60 * 60);
echo "1週間後のunixタイムは:" . $new_time . "\n";
echo "\n";
echo "////////////////////////////////// \n";
echo "\n";

//mktimeを使う
echo "### mktimeテスト ### \n";
echo "\n";
$time = mktime(21,30,50,4,30,2021);
echo "指定時刻のunixタイムは:" . $time . "\n";
echo "\n";
echo "////////////////////////////////// \n";
echo "\n";

//dateを使う
echo "### dateテスト ### \n";
echo "\n";
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s") . "\n";
echo date("Y:m/d") . "\n";
echo date("Y:m/01") . "\n";
echo date("Y:m/t") . "\n";
echo date("w") . "\n";
?>
