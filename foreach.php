<?php
$members = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

// バリューのみ表示
foreach($members as $member){
    echo $member;
    echo '<br>';
}
echo '<br>';
echo '<br>';

// キーとバリューを表示
foreach($members as $key => $value){
    echo $key . 'は' . $value . 'です。';
    echo '<br>';
}

echo '<br>';
echo '<br>';

// キーとバリューを表示
foreach($members as $member => $value){
    echo $member . 'は' . $value . 'です。';
    echo '<br>';
}

echo '<br>';
echo '<br>';

$members_2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ],

];

//多段階の配列を展開 foreachを入れ子にする
foreach($members_2 as $members_1){
    foreach($members_1 as $member => $value){
        echo $member . 'は' . $value . 'です';
        echo '<br>';
    }
}

?>