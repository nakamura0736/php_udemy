<?php
echo '<pre>';
echo var_dump($_POST);
echo '</pre>';
echo '<br>';
//入力フォームの練習

// ２パターン
//3つのファイルで構成 入力、確認、完了 input.php confirm.php thanks.php

//１つのファイルで完結 input.php


$pageFlag = 0 ; //入力

if(!empty($_POST['btn_confirm'])){
    $pageFlag = 1 ; //確認
}
if(!empty($_POST['btn_submit'])){
    $pageFlag = 2 ; //完了
}

?>

<!DOCTYPE html>
<meta charset="utf-8">

<head></head>

<body>

<!-- 入力画面 -->
<?php if($pageFlag===0): ?>
    <form method="POST" action="input.php">
        名前
        <?php if(isset($_POST['your_name'])): ?>
            <input type="text" name="your_name" value="<?php echo $_POST['your_name']; ?>">
        <?php else: ?>
            <input type="text" name="your_name">
        <?php endif; ?>
        <br>
        メールアドレス
        <?php if(isset($_POST['email'])): ?>
            <input type="email" name="email" value="<?php echo $_POST['email']; ?>">
        <?php else: ?>
            <input type="text" name="email">
        <?php endif; ?>

        <br>
        <br>
        <input type="submit" name="btn_confirm" value="確認する">
    </form>
<?php endif; ?>

<!-- 確認画面 -->
<?php if($pageFlag===1): ?>
    <form method="POST" action="input.php">
        名前
        <br>
        <?php echo $_POST['your_name']; ?>
        <br>
        メールアドレス
        <br>
        <?php echo $_POST['email']; ?>

        <br>
        <br>
        <input type="submit" name="back" value="戻る">
        <input type="submit" name="btn_submit" value="送信する">
        <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
    </form>
<?php endif; ?>

<!-- 完了画面 -->
<?php if($pageFlag===2): ?>
送信が完了しました。
<?php endif; ?>



</body>

