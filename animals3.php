<?php
echo '<h2>Задание "Жестокое обращение с животными"</h2>';
$continents = [
    'Africa' => [
        'Phocoena phocoena',
        'Tursiops aduncus',
        'Panthera',
        'Crocodili',
        'Sus scrofa',
        'Horse',
        'Gazella dorcas',
        'Balaenoptera musculus',
        'Mustela nivalis',
        'Proteles cristatus',
    ],
    'Eurasia' => [
        'Fox',
        'Lupus',
        'Bisontes excellentique',
        'Onocrotalum',
        'Ursus brunneis',
        'Pardus nix',
        'Varan',
        'Agrum mus',
        'Serow',
        'Volantem Rana'
    ]
];
echo 'ИСХОДНЫЙ МАССИВ: <br><br>';
print_r($continents);
echo '<br><br>';

// Создаем общий массив из названий всех животных
foreach ($continents as $continent => $animals) {
    foreach ($animals as $key => $animal) {
        $glob_animals[]=$animal;
    } 
}

// Находим среди них названия из двух слов (с одним пробелом)
$final_animal = preg_grep("~\s{1}~",$glob_animals);

// Формируем и выводим строку из значений финального массива
$spisok=implode(', ', $final_animal);
echo "НАЗВАНИЯ ИЗ ДВУХ СЛОВ:<br><br>";
echo "$spisok";                          
echo "<br>";

// Формируем два массива из разбитых на части значений финального массива
foreach ($final_animal as $anim) {      
    $parts = explode(' ', $anim);
    $first[] = $parts[0];
    $second[] = $parts[1];
}            

// Перемешиваем значения в массивах и создаем результирующий массив
shuffle($first);
shuffle($second);
$resalt = array_combine($first, $second);

echo "<h2>Фантазийные животные</h2>";
// Выводим строку ключ => значение
foreach ($resalt as $key => $value) {
    echo $key." ".$value."\n<br/>";
}
?>