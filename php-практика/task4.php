<?php
echo "Задание 4:" . PHP_EOL;

$arr = array();
for ($i = 0; $i < 5; $i++) {
    $arr[] = rand(0, 100);
}

echo "Исходный массив: " . implode(", ", $arr) . PHP_EOL;
$min = min($arr);
$min_index = array_search($min, $arr);
$last = count($arr) - 1;

$temp = $arr[$min_index];
$arr[$min_index] = $arr[$last];
$arr[$last] = $temp;
echo "Измененный массив: " . implode(", ", $arr) . PHP_EOL; 
echo PHP_EOL;