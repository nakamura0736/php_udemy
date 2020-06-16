<?php
//配列　１行
$array = [1,2,3];
$string = ['a','b','c'];

// 配列　複数行
$array2 = [
    ['赤','青','黄色'],
    ['緑','紫','黒'],
];

// 連想配列
$array_member = [
    'name' => '本田',
    'tall' => 170,
    'hobby' => 'サッカー'
];

$array_member2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ]
];
echo $array_member2['香川']['height'];

$array_member3 = [
    '1組' => [
        '本田' => [
            'height' => 170,
            'hobby' => 'サッカー'
        ],
        '香川' => [
            'height' => 165,
            'hobby' => 'サッカー'           
        ]
    ],
    '2組' => [
        '長友' => [
            'height' => 160,
            'hobby' => 'サッカー' 
        ],
        '乾' => [
            'height' => 168,
            'hobby' => 'サッカー'            
        ]
    ]
];

// echo $array[0];
echo '<pre>';
    var_dump($array);
    var_dump($string);
    var_dump($array2);
    var_dump($array_member);
    var_dump($array_member2);

echo '</pre>';

echo $array2[1][2];
echo '<br>';
echo $array_member['hobby'];
?>