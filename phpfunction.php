<?php
$text = 'あいうえお';

//文字数カウント
echo strlen($text);
echo '<br>';
//文字数カウント　(マルチバイト 日本語の文字数に対応)
echo mb_strlen($text);
echo '<br>';

//文字列を置換
$str = 'この人置換です！';
echo str_replace('置換', '痴漢', $str);
echo '<br>';




//指定文字列で分割する
$str2 = '空はまるで、君のように、青く澄んで、どこまでも';

echo '<pre>';
var_dump(explode('、',$str2));
echo '</pre>';
echo '<br>';
echo explode('、',$str2)[1];

//implode
echo '<br>';

//正規表現
//文字かどうか
//数字かどうか
//郵便番号
//メアドかどうか
$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/', $str_3);
echo '<br>';
//指定文字列から文字列を取得する
echo substr('abcde', 1);
echo '<br>';
echo mb_substr('あいう', 1);

?>