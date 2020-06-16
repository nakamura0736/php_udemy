<?php

$coontactFile = '.csv.dat';

//ファイル丸ごと読み込み
$fileContents = file_get_contents($coontactFile);


//配列 file, 区切る explode, foreach
$allData = file($coontactFile);

foreach($allData as $lineData){
  $lines = explode(',', $lineData);
  echo $lines[0] . '<br>';
  echo $lines[1] . '<br>';
  echo $lines[2] . '<br>';
  echo $lines[3] . '<br>';

}


?>