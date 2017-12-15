<?php
/**
 * Created by PhpStorm.
 * User: panikajo
 * Date: 12.12.2017
 * Time: 16:01
 */

$r = readfile("header.php");
$name = fopen("order.php", "r");
while(!feof($name)) {
    echo fgets($name);
}
$c = readfile("category.php");
$cat = file_get_contents("db/category.txt");
$arr = explode("\n", $cat);
foreach ($arr as $value => $key) {
    echo $key."<br>";
}
$footer = file_get_contents("footer.php");
echo $footer;

