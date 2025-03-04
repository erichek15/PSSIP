<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создать пользователя</title>
</head>
<body>
    <form action="process_user.php" method="POST">
        <label for="userId">UserId:</label>
        <input type="number" id="userId" name="userId"><br>
        
        <label for="firstName">Имя:</label>
        <input type="text" id="firstName" name="firstName" required><br>
        
        <label for="lastName">Фамилия:</label>
        <input type="text" id="lastName" name="lastName" required><br>
        
        <input type="submit" value="Отправить">
    </form>
</body>

</html>

