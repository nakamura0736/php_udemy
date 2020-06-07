<?php

// echo $_POST['name'];
echo '<br>';
echo '<pre>';
echo var_dump($_POST);
echo '</pre>';
echo '<br>';
// echo $_POST['sports'][0];

//スーパーグローバル変数 phpは９種類ある
//連想配列になっている


?>


<!DOCTYPE html>
<meta charset="utf-8">

<head></head>

<body>

<form method="POST" action="post.php">
    名前
    <input type="text" name="name"></input>
    <br>
    <input type="checkbox" name="sports[]" value="野球">野球</input>
    <input type="checkbox" name="sports[]" value="サッカー">サッカー</input>
    <input type="checkbox" name="sports[]" value="バスケ">バスケ</input>
    <br>
    <br>
    <input type="submit" value="送信"></input>

</form>

</body>