<?php
//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $address = $_POST["address"];
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $dbName = $_POST["dbName"];
//   } else {
//     header("Location: login.php");
//     exit();
//   }
define('DB_HOST', 'std-mysql.ist.mospolytech.ru'); //Адрес
define('DB_PORT', 3306); //Имя пользователя
define('DB_USER', 'std_2169_weblab5'); //Имя 
define('DB_PASSWORD', '12345678'); //Пароль
define('DB_NAME', 'std_2169_weblab5'); //Имя БД
$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
?>