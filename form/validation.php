<?php



function validation($data){
    $error = [];

    if(empty($data['your_name']) || 20 < mb_strlen($data['your_name'])){
        $error[] = '「氏名」は20文字以内で入力して下さい';
    }

    //メールアドレス
    if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $error[] = '「メールアドレス」を正しい形式で入力して下さい';
    }

    //URL
    if(!empty($data['url'])){
        if(!filter_var($data['url'], FILTER_VALIDATE_URL)){
            $error[] = '「ホームページ」を正しい形式で入力して下さい';
        }
    }

    //性別
    if(!isset($data['gender'])){
        $error[] = '「性別」は必須項目です。';
    }

    //年齢
    if(empty($data['age']) || 6 < $data['age']){
        $error[] = '「年齢」は必須項目です。';
    }

    //お問い合わせ内容
    if(empty($data['contact']) || 200 < mb_strlen($data['contact'])){
        $error[] = '「お問い合わせ内容」は200文字以内で入力して下さい';
    }
    //注意事項
    // if(!empty($data['btn_confirm'])){
        if($data['caution'] !== '1'){
            $error[] = '「注意事項」をご確認ください。';
        }
        // if($data['caution']){
        //     $error[] = 'cautionあり';
        // }else{
        //     $error[] = 'cautionなし';
        // }
    // }

    return $error;
}

?>
