<?php
echo "test";
echo "\n\n";

function syutsuryoku_to_kaigyou($mojiretsu) {
    echo $mojiretsu;
    echo "\n\n";
}
syutsuryoku_to_kaigyou("test2");
// echo "test2";
// echo "\n";

$test3 = "これは？";
syutsuryoku_to_kaigyou($test3);
// echo "これは？";
// echo "\n";

function multi($a) {
    $z = $a * 2;
    return $z; 
}

echo multi(2);
echo "\n";
echo multi(4);
echo "\n";
echo multi(8);
echo "\n";
echo multi(multi(multi(2)));
echo "\n";

$arr2 = array(1, 3, 5, 7, 9);

function kadai3($arr1) {
    // その要素をすべてかけた結果を返す関数
    $result1 = 1;
    foreach($arr1 as $value){
        // var_dump($value);
        $result1 = $result1 * $value;
    }
    return $result1;
}

$result2 = kadai3($arr2);
echo $result2;
echo "\n";
