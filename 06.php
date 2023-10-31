<?php
// 1から10までを足して結果を返す関数
function sum_10(){
    $result = 0;
    for($i = 1; $i <= 10; $i++){
        $result += $i;
    }
    return $result;  
}

// 関数を実行する
echo sum_10();

// 1から$maxまでを足して結果を返す関数
function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }
    return $result;
}

// 関数を実行
echo sum(10); // この関数を呼び出す際には、$maxに値を指定する必要があります。
?>