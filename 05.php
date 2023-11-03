<?php
// 課題1
$name ="村松";
if ($name = "村松") {
  echo "私は 村松です。";
} 
else {
  echo "私の名前ではありません。";
} 
echo "\n";

// 課題2
$sum = 0;
for ($i = 1; $i <= 10000; $i++) {
  $sum += $i;
}
echo "1から10000までの合計は: " . $sum;
echo "\n";

// 課題3
$fruits = array("apple", "orange", "lemon", "meron", "peach");
echo count($fruits);
for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}
foreach($fruits as $fruits){
  echo "要素は" . $fruits;
  echo "\n";
}

?>