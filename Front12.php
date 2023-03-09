<?php

$name = "タカムラ";
if ($name =="タカムラ") {
    echo "「私はタカムラです」";
  } else {
    echo "あなたの名前ではありません";      
  }

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

$fruits = array("apple", "orange", "peach", "banana", "lemon");
foreach($fruits as $fruits){
    echo $fruits;
}


  for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0){
    echo"$i";
    echo"\n";
  }
  }
  

  