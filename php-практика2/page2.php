<?php
session_start();

if (isset($_SESSION['firstName']) && isset($_SESSION['lastName'])) {
    echo "Имя: " . $_SESSION['firstName'] . "<br>";
    echo "Фамилия: " . $_SESSION['lastName'] . "<br>";
    echo "Идентификатор сессии: " . session_id();
} else {
    echo "Данные не найдены.";
}
?>