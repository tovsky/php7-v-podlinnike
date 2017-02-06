<?php
$list[] = "Dmitriy";
$list[] = "Koterov";
$list[] = "21";
list($name, $surname, $age) = $list;

for ($i = 0; $i < count($list); $i++)
    echo "Переменная$i $list[$i] <br />";

echo 'Переменная $name имеет значение ' . $name . "<br />";
echo 'Переменная $surname имеет значение ' . $surname . "<br />";
echo 'Переменная $age имеет значение ' . $age . "<br />";
