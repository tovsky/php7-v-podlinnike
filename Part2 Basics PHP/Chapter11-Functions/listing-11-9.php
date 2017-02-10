<?php
    // Использование ...
    function toomnyargs($fst, $snd, $thd, $fth) 
    {
        echo "Первый параметр: $fst<br />";
        echo "Второй параметр: $snd<br />";
        echo "Третий параметр: $thd<br />";
        echo "Четвертый параметр: $fth<br />";
    }
    // Отображаем строки одну под другой
    $planets = ["Меркурий", "Венера", "Земля", "Марс"];
    toomnyargs(...$planets);
?>