<?php

//CSRF 偽物のinput.phpと本物のinput.phpを見分ける！
session_start();

header('X-FRAME-OPTIONS:DENY');

//セキュリティ対策 XSS(Cross-Site Scripting) サニタイズ
function h($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

echo '<pre>';
// echo var_dump($_POST);
echo var_dump($_SESSION);
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
    <?php 
        if(!isset($_SESSION['csrfToken'])){
            $csrfToken = bin2hex(random_bytes(32)); 
            $_SESSION['csrfToken'] = $csrfToken;
        }
        $token = $_SESSION['csrfToken'];
    ?>

    <form method="POST" action="input.php">
        名前
        <?php if(isset($_POST['your_name'])): ?>
            <input type="text" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
        <?php else: ?>
            <input type="text" name="your_name">
        <?php endif; ?>
        <br>
        メールアドレス
        <?php if(isset($_POST['email'])): ?>
            <input type="email" name="email" value="<?php echo h($_POST['email']); ?>">
        <?php else: ?>
            <input type="text" name="email">
        <?php endif; ?>

        <br>
        <br>
        <input type="submit" name="btn_confirm" value="確認する">
        <input type="hidden" name="csrf" value="<?php echo $token ?>" >
    </form>
<?php endif; ?>

<!-- 確認画面 -->
<?php if($pageFlag===1): ?>
    <?php if($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
        <form method="POST" action="input.php">
            名前
            <br>
            <?php echo h($_POST['your_name']); ?>
            <br>
            メールアドレス
            <br>
            <?php echo h($_POST['email']); ?>

            <br>
            <br>
            <input type="submit" name="back" value="戻る">
            <input type="submit" name="btn_submit" value="送信する">
            <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
            <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
            <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
        </form>
    <?php endif; ?>
<?php endif; ?>

<!-- 完了画面 -->
<?php if($pageFlag===2): ?>
    <?php if($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
        送信が完了しました。
        <?php unset($_SESSION['csrfToken']); ?>
    <?php endif; ?>
<?php endif; ?>



</body>

