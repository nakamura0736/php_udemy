<?php

function test(){
    //処理
    echo 'test';
}
test();

echo '<br>';

function getComment($string){
    echo $string;
}

$comment = 'コメント2';
$comment3 = 'コメント3';

// getComment('コメント');
// getComment($comment);
getComment($comment3);

echo '<br>';


function getNumberOfComment(){
    return 5;
}
var_dump(getNumberOfComment());
echo '<br>';
echo getNumberOfComment();

$commentNumber = getNumberOfComment();
echo '<br>';

echo $commentNumber;
echo '<br>';


function sumPrice($int1, $int2){
    $int3 = $int1 + $int2;
    return $int3;
}
$total = sumPrice(5,3);
echo $total;
?>