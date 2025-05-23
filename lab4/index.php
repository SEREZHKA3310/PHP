<?php

// На карманы при замене Дана строка вида 'a1b2c3'. 
// Напишите регулярку, которая найдет все цифры и удвоит их количество таким образом: 'a11b22c33' (то есть рядом с каждой цифрой напишет такую же).
$str = 'a1b2c3';
$result = preg_replace('/(\d)/', '$1$1', $str);
echo $result . '<br>';


// Задачи на preg_match[_all] Задачи не всегда можно решить с помощью одной только регулярки. 
// Может понадобится еще что-нибудь дописать на PHP (не всегда, но такое может быть). 
// С помощью preg_match определите, что переданная строка является доменом, название которого начинается с http. 
// Примеры доменов: http://site.ru, http://site.com.

function isHttpDomain(string $url): bool {
    return preg_match('/^https?:\/\/[a-z0-9\-]+\.[a-z]{2,}$/i', $url) === 1;
}

var_dump(isHttpDomain('http://site.ru')); // true
echo '<br>';
var_dump(isHttpDomain('justtext')); // false
echo '<br>';


// На экранировку посложнее Дана строка 'bbb hello , world eee'. Напишите регулярку, которая найдет содержимое тегов и заменит их на '!'.

$str = 'bbb hello , world eee';
$result = preg_replace('/bbb.*eee/', '!', $str);
echo $result . '<br>';


// На обратный слеш \ Дана строка 'a\a a\a a\\a'. Напишите регулярку, которая заменит строку 'a\\a' на '!'.

$str = 'a\a a\a a\\a';
$result = preg_replace('/a\\\\a/', '!', $str);
echo $result;


// На карманы в самой регулярке Дана строка 'aaa bcd xxx efg'. Найдите строки, состоящие из одинаковых символов (это будет aaa xxx).

$str = 'aaa bcd xxx efg';
preg_match_all('/(\w)\1+/', $str, $matches);
print_r($matches[0]);