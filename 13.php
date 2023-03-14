<?php

//引数に数値を指定して実行すると、数値を２倍にして返す関数

function multi($a) {
    $z = $a * 2;
    return $z; 
}
$result = multi(2);
echo $result;
echo "\n";


/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
 */
 
 function add($a, $b) {
     $z = $a + $b;
     return $z;
 }
 
 $result = add(1,2);
 echo $result;
 echo "\n";
 
 /*
 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
 を渡すとその要素をすべてかけた結果を返す関数を作成してください
 */
 
 $arr = array(1, 3, 5, 7, 9);
 
 function kadai3($arr2) {
    $result = 1;
    foreach($arr2 as $value){
        $result = $result * $value;
    }
    return $result;
 }
$result2 = kadai3($arr);
echo $result2;
echo "\n";
 
 
/*4  一番下にあります

5
.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

strip_tags
array_push
array_merge
time, mktime
date
*/
//strip_tags 文字列から HTML および PHP タグを取り除く

$st = '<h>Test</h> <p>text</p>';
    echo strip_tags($st);
    echo '\n';

echo strip_tags($st,'<h><p>');

//array_push 配列の最後に要素を追加する
$a = array('桐生', '真島', '冴島');
    array_push($a, '春日');

print_r ($a);
echo '\n';

//arry_merge　ひとつ、または複数の配列をマージする
$a = array('トルネコ', 'サンチョ', 'アモス');
$b = array('キーファ', 'モリー', 'ホメロス');
    $merge = array_merge($a, $b);

print_r ($merge);
echo '\n';

//time 現在のUnixタイムスタンプを返す
//mktime 日付をUnixのタイムスタンプとして取得する
//Unixタイムスタンプを書式化する

echo time();
echo '\n';

$time = mktime(0, 0, 0, 15, 3, 2023);
print date ('Y年m月d日h時i分秒s', $time);
echo '\n';


/*配列の中で1番大きい値を返す max_array という関数を実装
途中の部分を完成させてください
function max_array($arr){
foreach($arr as $a){
}
  return $max_number;
}
*/
$namber =  array(1, 3, 5, 7, 9);
    $max_namber = 0;
        function max_array($arr){
        foreach($arr as $a){
            $max_number = max($a);
    }
        return $max_namber = max_array($namber);
}
echo $max_namber;
echo max_array($namber);
echo "\n";
