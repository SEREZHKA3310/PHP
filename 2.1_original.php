<!-- array_count_values. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв. -->

<?php 
$array1 = ['a', 'b', 'c', 'b', 'a'];

$result = array_count_values($array1);

print_r($result);

echo "<br>";


// array_replace. Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'.

$array2 = ['a', 'b', 'c', 'd', 'e'];

$result = array_replace($array2, [0 => '!', 3 => '!!']);

print_r($result);

echo "<br>";

// array_shift, array_pop, array_unshift, array_push. Дан массив с элементами 1, 2, 3, 4, 5. Добавьте ему в начало элемент 0, а в конец - элемент 6.

$array3 = [1, 2, 3, 4, 5];

array_unshift($array3, 0);

array_push($array3, 6);

print_r($array3);


// Ассоциативные массивы. Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели.

$daysOfWeek = [
  1 => 'Понедельник',
  2 => 'Вторник',
  3 => 'Среда',
  4 => 'Четверг',
  5 => 'Пятница',
  6 => 'Суббота',
  7 => 'Воскресенье'
];

$currentDayNumber = date('N');

echo "Сегодня: " . $daysOfWeek[$currentDayNumber] . "<br>";



// Ассоциативные массивы. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.

$progLang = ['html', 'css', 'php', 'js', 'jq'];

foreach($progLang as $lang) {
  echo $lang . "<br>";
}

?>