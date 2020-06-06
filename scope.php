<?php

$globalVariable = 'グローバル変数です';

function checkScope($str){
    $localVariable = 'ローカル変数です';
    echo $localVariable;
    echo '<br>';

    // global $globalVariable;
    // echo $globalVariable;
    echo $str;

}
echo $globalVariable;
echo '<br>';
echo $localVariable;
echo checkScope($globalVariable);


?>
