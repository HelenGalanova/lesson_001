<h1>Задание №3</h1>
<p>1. Создайте константу и присвойте ей значение. <br>
    2. Проверьте, существует ли константа, которую Вы хотите использовать <br>
    3. Выведите значение созданной константы <br>
    4. Попытайтесь изменить значение созданной константы. <br></p>

<?php
define("CONSTABLE", "one");
define("CONSTABLE", "one2"); // Notice: Constant already defined
?>

<?php
if (defined("CONSTABLE") == true) echo "Константа CONSTABLE объявлена! Её значение равно:" . CONSTABLE . "<br>";
?>
