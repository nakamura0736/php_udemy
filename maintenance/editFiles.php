<?php

$coontactFile = '.contact.dat';

//ファイル丸ごと読み込み
$fileContents = file_get_contents($coontactFile);
echo $fileContents;

//ファイルに書き込み(上書き)
// file_put_contents($coontactFile, 'テスト');

//改行はバックスラッシュ(option(command) + ¥) n 
$addText = 'テストです' . "\n";

//ファイルに書き込み(追記)
file_put_contents($coontactFile, $addText, FILE_APPEND);

?>