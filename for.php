<?php


for($i = 1 ; $i < 10 ; $i++){

    if($i === 5){
        // break ループを終了する
        // break;
        // continue 以下の処理を中止して次のループへ
        continue;
    }
    echo $i;
    echo '<br>';

}

?>