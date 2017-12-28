<?php
/**
 * Created by PhpStorm.
 * User: panikajo
 * Date: 12.12.2017
 * Time: 16:01
 */

$r = readfile("./templates/header.php");
$name = fopen("order.php", "r");
while(!feof($name)) {
    echo fgets($name);
}


$c = readfile("category.php");
$cat = file_get_contents("db/category.txt");
$arr = explode("\n", $cat);
foreach ($arr as $value) {
    $a = explode("|",$value);
    echo $a[1]."<br/>";
}

$footer = file_get_contents("./templates/footer.php");
echo $footer;
