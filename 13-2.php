<?php
/*$number =  array(1, 3, 5, 7, 9);

// DEBUG: 変数 $number に代入されている値を出力してみる
print_r('number: ');
print_r($number);
print_r("\n");// デバッグを見やすくするための改行

function max_array($arr){

  // DEBUG: 変数 $arr に代入されている値を出力してみる
  print_r('arr: ');
  print_r($arr);
    // 変数 $number と同じ値が代入されているはず
  print_r("\n");// デバッグを見やすくするための改行

  $max_number = $arr[0];
  // DEBUG: 変数 $max_number に代入されている値を出力してみる
  print_r('初期化後すぐの max_number: ');
  var_dump($max_number);
    // 配列変数 $arr の 0 番目の要素が代入されているはず
  print_r("\n");// デバッグを見やすくするための改行

  foreach($arr as $a ){

    // DEBUG: 変数 $a に代入されている値を出力してみる
    print_r('a: ');
    var_dump($a);
      // 配列変数 $arr の要素が、順番に代入されているはず

  
    // DEBUG: 変数 $max_number に代入されている値を出力してみる
    print_r('for 文の中での max_number: ');
    var_dump($max_number);
      // 今はまだ max_number の値は何も操作していないので、変更されていない
      // 変数 $a と比較して、より大きな値を代入しておきたい
    print_r("\n");// デバッグを見やすくするための改行

  }

  // DEBUG: 変数 $max_number に代入されている値を出力してみる
  print_r('return 直前の max_number: ');
  var_dump($max_number);
    // for 文の中で $max_number の値は変更されていない
    // 最終的には、配列変数 $arr の中で、一番大きな値を代入しておきたい
  print_r("\n");// デバッグを見やすくするための改行

  return $max_number;
  
}

echo max_array($number);
echo "\n";

*/
$number = array(1, 3, 9, 7, 5,);

function max_array($arr){
    $max_number = $arr[0];    
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array($number);
echo "\n";

 /*$max_number = $arr[0];    
 ここでの$max=numberは配列の1つ目の1が代入されてる
 
    foreach($arr as $a){
    $arrから$aへ13975が順番に代入
    
        if($max_number < $a){
        $max_numberより$aが大きい場合、$max_numberに上書きされて下の行の$aに渡される。
        1はmax_numberと等しいので無視、3は大きいので$max_numberに上書き、次の9
        も上書き。7と5は9より小さいので無視。
        
            $max_number = $a;
            $aに渡された9が$max_numberに代入される。
        }*/