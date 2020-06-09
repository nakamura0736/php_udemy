<?php

//CSRF 偽物のinput.phpと本物のinput.phpを見分ける！
session_start();

header('X-FRAME-OPTIONS:DENY');

//セキュリティ対策 XSS(Cross-Site Scripting) サニタイズ
function h($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

echo '<pre>';
echo var_dump($_POST);
// echo var_dump($_SESSION);
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
        氏名
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
        ホームページ
        <?php if(isset($_POST['url'])): ?>

            <input type="url" name="url" value="<?php echo h($_POST['url']); ?>">
        <?php else: ?>
            <input type="url" name="url">
        <?php endif; ?>

        <br>
        性別
        <input type="radio" name="gender" value="0">男性</input>
        <input type="radio" name="gender" value="1">女性</input>
        <br>
        年齢
        <select name="age">
            <option value="">洗濯してください</option>
            <option value="1">〜19歳</option>
            <option value="2">20歳〜29歳</option>
            <option value="3">30歳〜39歳</option>
            <option value="4">40歳〜49歳</option>
            <option value="5">50歳〜59歳</option>
            <option value="6">60歳〜69歳</option>
        </select>
        <br>
        お問い合わせ内容
        <textarea name="contact" value="<?php echo h($_POST['contact']); ?>"></textarea>
        <br>
        注意事項のチェック
        <br>
        <input type="checkbox" name="caution" value="1">注意事項にチェックする
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

