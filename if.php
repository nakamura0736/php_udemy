<?php

// if (条件) {
//     条件が真なら実行
// }

$height = 90;

if ($height == 90 ) {
    echo '身長は' . $height . 'cmです';
}

// == 一致
// == 型も一致
// 出来るだけイコールは３つ。

echo '<br>';

$math = 81;
// 三項演算子
$comment = $math > 80 ? 'good' : 'not good'; 
echo $comment;

?>