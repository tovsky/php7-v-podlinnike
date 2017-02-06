<?php
    $phone = ['001', '949', '555', '0112'];
    $save = serialize($phone);              // Превращаем $phone в строку
    echo $save;                             // Выводим сериализованое представление
    $phone = "bogus";                       // портим то, что было раньше в $phone
    echo count($phone);                     // Выводит 1
    $phone = unserialize($save);            // Восстанавливаем $phone
    echo count($phone) . "<br>";            // выводит 4
    print_r($phone);                        // Выведет первоначальное значение $phone
?>
