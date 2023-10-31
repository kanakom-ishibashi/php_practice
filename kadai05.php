<?php
$weekday = "月曜";
switch ($weekday) {
    case "月曜":
    echo "可燃ごみの日です。";
    break;
    case "水曜":
    echo "資源ごみの日です。";
    break;
    default:
        echo "回収はありません";
        break;
}
echo "\n";

$weekday = "火曜";
switch ($weekday) {
    case "月曜":
        case "木曜":
            echo "可燃ごみの日です。";
            break;
            case "水曜":
                 echo "資源ごみの日です。";
                  break;
                  default:
                      echo "回収はありません。";
                      break;
}
echo "\n";

$a = 3;
$b = 3;
$c = "3";
var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);

echo "\n";

for($i = 0; $i < 10; $i++){
echo $i;
}

?>



                 

