<?php
    // Вложенные функции.
    function farther($a)
    {
        echo $a, "<br />";
        function child($b)
        {
            echo $b + 1, "<br />";
            return $b * $b;
        }
        return $a * $a * child($a);
        // Фактически возвращает $a * $a * ($a + 1) * ($a + 1)
    }
    // Вызываем функции
    farther(10);
    child(30);
    // Если эти функции расположить в обратном порядке, то будет ошибка
?>