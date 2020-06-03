<!DOCTYPE html>
<head></head>

<body>
ここはhtml！
<?php 
$test = 123;
$test = 'aaa';
echo '<br>';
var_dump($test);

echo '<br>';

echo 'ここはPHP';
echo '<br>';
echo 'こんばんは"ダブルクオート"ananna';
echo '<br>';
echo $test;
echo '<br>';

$test1 = 123;
$test2 = 456;
$test3 = $test1 . $test2;
echo '<br>';
echo $test1;
echo '<br>';
echo $test2;
echo '<br>';
echo $test3;
// var_dump($test3);
echo '<br>';

const MAX = 'テスト';
const MAX = 'テスト2';

echo MAX;


phpinfo();




?>


</body>
</html>