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

// Ищем двойные названия и разбиваем их на два массива
foreach ($continents as $animals) {
    foreach ($animals as $animal) {
        if (count(explode(' ', $animal))==2) {
            $double_names[]=explode(' ', $animal);
        }
    } 
}
foreach ($double_names as $name) {      
    $first[] = $name[0];
    $second[] = $name[1];
}

// Формируем и выводим строку
for ($i=0; $i < count($first); $i++) { 
    $spisok[]="$first[$i] $second[$i]";
}
$spisok=implode(', ', $spisok);
echo 'НАЗВАНИЯ ИЗ ДВУХ СЛОВ:<br><br>';
echo $spisok;                          
echo '<br>';

// Перемешиваем значения в массивах и создаем результирующий массив
shuffle($first);
shuffle($second);
$result = array_combine($first, $second);

// Выводим строку ключ => значение
echo '<h2>Фантазийные животные</h2>';
foreach ($result as $key => $value) {
    echo $key.' '.$value.'<br/>';
}
?>