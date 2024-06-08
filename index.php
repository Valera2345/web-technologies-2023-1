<?php

// Задание 1

$num = 0;
echo '<h1>Задание 1</h1>';

do
{
    if ($num == 0) {
        $result1 = '<p>' . $num . ' - это ноль.</p>';
    } else if ($num % 2 == 0) {
        $result1 = '<p>' . $num . ' - это четное число.</p>';
    } else {
        $result1 = '<p>' . $num . ' - это нечетное число.</p>';
    }
    $num += 1;
    echo $result1;
} while ($num <= 10);


// Задание 2

$cities = [
"Московская область" => [
    "Москва",
    "Зеленоград",
    "Клин"
],
"Ленинградская область" => [
    "Санкт-Петербург",
    "Всеволожск",
    "Павловск",
    "Кронштадт"
],
"Рязанская область" => [
    "Рязань",
    "Скопин",
    "Рыбное"
]
];

$result2 = "";
echo '<h1>Задание 2</h1>';

foreach($cities as $citykey => $cityvalue) {
    $result2 = "<p>" . $citykey . ":</p>";
    $result2 .= implode(", ", $cityvalue);
    echo $result2;
}

// Задание 3
echo("<h3>Задание 3</h3>");

function transliteration($text){
    $letters = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'ye', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'к'=>'k', 'л'=>'l','м'=>'m', 'н'=>'n','о'=>'o', 'п'=>'p','р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u','ф'=>'f','х'=>'kh', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh','щ'=>'tch', 'ъ'=>'"', 'ы'=>'y', 'ь'=>'`', 'э'=>'eh', 'ю'=>'yu', 'я'=>'ya');
    $chars = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);
    $res = '';
    foreach($chars as $val) {
        $res .= isset($letters[$val]) ? $letters[$val] : $val; 
    }
    return $res;
}

$text = 'Хочу зачет';
echo transliteration($text);
echo("<hr>");

// Задание 4
echo("<h3>Задание 4</h3>");

$menu =  [
    [
        'title' => 'Меню 1',
        'link' => 'menu_1',
        'children' => [[
            'title' => 'Подменю 1',
            'link' => 'sub-menu_1',
            'children' => [
                [
                    'title' => 'Подменю 1.1',
                    'link' => 'sub-menu_1-1',
                    'children' => [
                        [
                            'title' => 'Подменю 1.1.1',
                            'link' => 'sub-menu_1-1-1',
                        ],
                    ]
                ]
            ]
        ]],
    ],
    [
        'title' => 'Меню 2',
        'link' => 'menu_2',
        'children' => [[
            'title' => 'Подменю 2',
            'link' => 'sub-menu_2',
            'children' => [
                [
                    'title' => 'Подменю 2.1',
                    'link' => 'sub-menu_2-1',
                ]
            ]]
        ]
    ],
    [
        'title' => 'Меню 3',
        'link' => 'menu_3',
    ]
];

function createMenu($menu) {
    echo '<ul>';
    foreach ($menu as $value) {
        echo '<li>';
        echo "<a href='{$value['link']}'> {$value['title']} </a>";
        if (isset($value['children'])) {
            createMenu($value['children']);
        }
        echo '</li>';
    }
    echo '</ul>';
}
createMenu($menu);

echo("<hr>");

