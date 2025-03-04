<?php
echo "Задание 5:" . PHP_EOL;
$s1 = "Я люблю Беларусь";
$s2 = "Я учусь в Политехническом колледже";

echo "Длина строки S2: " . mb_strlen($s2) . PHP_EOL;

echo "Слово 'Беларусь' " . (strpos($s1, "Беларусь") !== false ? "найдено" : "не найдено") . " в строке S1" . PHP_EOL;

$n = 23; 
$char = mb_substr($s2, $n-1, 1);
echo "Символ №$n в S2: '$char', его ASCII-код: " . ord($char) . PHP_EOL; 
echo PHP_EOL;