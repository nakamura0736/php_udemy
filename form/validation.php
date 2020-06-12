<?php


function validation($data){
    $error = [];

    if(empty($data['your_name'])){
        $error[] = '氏名は必須です';
    }

    return $error;
}

?>
