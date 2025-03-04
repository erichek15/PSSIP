<?php
ob_start();

include 'task2.php';
include 'task3.php';
include 'task4.php';
include 'task5.php';
include 'task6.php';

$output = ob_get_clean(); 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP-практика</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        pre {
            background-color: #f8f8f8;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            white-space: pre-wrap;
        }
        h1 {
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Результаты выполнения заданий</h1>
        <pre><?php 
        echo 'hui';
        echo htmlspecialchars($output); 
        ?></pre>
    </div>
</body>
</html>
