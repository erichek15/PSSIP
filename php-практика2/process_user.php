
<?php

session_start();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$_SESSION['firstName'] = $firstName;
$_SESSION['lastName'] = $lastName;

header("Location: page2.php");

exit();
?>
