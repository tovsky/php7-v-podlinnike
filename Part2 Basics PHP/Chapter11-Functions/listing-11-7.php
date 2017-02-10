<?php
    // Использование функции func_get_args()
    function myecho()
    {
        foreach (func_get_args() as $v) {
            echo "$v<br />\n";      // выводим элемент
        }
    }
    // Отображаем строки одну под другой
    myecho("Меркурий", "Венера", "Земля", "Марс");
?>