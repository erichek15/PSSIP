<?php
echo "Задание 6:" . PHP_EOL;
function calculate($a, $b) {
    try {
        if ($a > 5 && $b > 0) {
            return 3 * $a * $a;
        } elseif ( 0 < $a && $a <= 5 && $b != 0) {
            return $a / $b;
        } else {
            return $b + $a - 1;
        }
    } catch (DivisionByZeroError $e) {
        return "Ошибка: деление на ноль!";
    } catch (Exception $e) {
        return "Произошла ошибка: " . $e->getMessage();
    }
}

$testCases = [
    [6, 1], 
    [-2, -2], 
    [3, 6]  
];

foreach ($testCases as $case) {
    $a = $case[0];
    $b = $case[1];
    $result = calculate($a, $b);
    echo "f($a, $b) = $result" . PHP_EOL;
} 
