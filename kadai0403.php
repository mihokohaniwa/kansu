<?php
function f($arr) {
 $result = 1;
 foreach($arr as $val) { // $arrから、要素が無くなるまで$valに一つずつ値が取り出される
   //ここに、取り出した値を乗算する処理を書く
  $result *= $val;
  // $result = $result * $val;
 }
 return $result;
 
}
echo f(array(1, 3, 5 ,7, 9));
?>