<?php
$name = 'けいこ';

if ($name == 'mihoko') {
  echo "あなたの名前はmihokoです";
} else {
  echo "あなたの名前ではありません";
  
 
}


$total = 0;


for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;


$fruits = array("apple", "orange", 
"grape","lemon","peach",);



for ($i = 0; $i < count($fruits); $i++) {
  echo "fruits" . $fruits[$i];
  echo "\n";
}


$start = "1";

$end = "100";

for($i = $start; $i < $end; $i++){

  if($i % 5 == 0){
    echo $i;
  }
}

?>