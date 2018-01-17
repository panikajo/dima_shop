<!--
 * Created by PhpStorm.
 * User: panikajo
 * Date: 12.12.2017
 * Time: 16:01
-->

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My shop</title>
</head>
<body>
<?php
include "./templates/header.php"; /*Простое подключение */

/*Категории*/
$c = readfile("category.php"); /*Читает файл*/
$category = file_get_contents("db/category.txt"); /*Читает содержимое файла в строку*/
$arr = explode("\n", $category); /*Разбивает строку с помощью разделителя*/
foreach ($arr as $value) {
    $a = explode("|",$value);
    echo '<a href="./category.php/'.$a[0].'">'.$a[1].'</a><br/>';
}


$name = fopen("order.php", "r");
while(!feof($name)) {
    echo fgets($name);
}
include "./templates/footer.php"; /*Простое подключение */
?>


</body>
</html>
