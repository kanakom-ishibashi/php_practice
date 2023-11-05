<?php
// 課題1
function doubleNumber($number) {
    $result = $number * 2;
    return $result;
}
//課題を実行
$result = doubleNumber(5);
echo $result;
echo "\n";

// 課題2
function addNumbers($a, $b) {
    $result = $a + $b;
    return $result;
}
$result = addNumbers(5, 3);
echo $result;
echo "\n";

// 課題3

function multiplyArray($arr) {
    $result = 1;
    foreach ($arr as $number) {
        $result *= $number;
    }
    return $result;
}
$myArray = array(1, 3, 5, 7, 9);
$result = multiplyArray($myArray);
echo $result; 
echo "\n";

?>