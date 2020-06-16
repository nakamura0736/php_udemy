<?php
//パスワードを記録した場所の
echo __FILE__;

// /Applications/MAMP/htdocs/php_udemy/maintenance/test.php

echo '<br>';
//パスワード(暗号化)
echo(password_hash('password123', PASSWORD_BCRYPT));
?>