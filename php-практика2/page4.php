<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=priceStyd;charset=utf8',
        'root',
        'root',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    $group = "ПЗТ-30";

    $stmt = $pdo->prepare("DELETE FROM Students WHERE `group` = :group");
    $stmt->bindParam(':group', $group, PDO::PARAM_STR);
    $stmt->execute();

    echo "Студент(ы) удален(ы).<br>";

    $stmt = $pdo->query("SELECT * FROM Students");
    
    $results = $stmt->fetchAll();
    
    if (count($results)) {
        foreach ($results as $row) {
            echo "ID: " . $row['id'] . 
                " - Имя: " . $row['name'] . 
                " - Фамилия: " . $row['surname'] . "<br>";
        }
    } else {
        echo "0 результатов";
    }

} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}
?>