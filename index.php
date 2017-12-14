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

$footer = file_get_contents("footer.php");
echo $footer;

$category = file_get_contents("db/category.txt");
echo $category;

?>

<?php