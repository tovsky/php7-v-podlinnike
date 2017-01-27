<?php
// Использование var_export()

class SomeClass
{
    private $x = 100;
}

$a = [1, ["Programs hacking programs. Why?", "д'Артаньян"]];
echo "<pre>"; var_export($a); echo "</pre>";
$obj = new SomeClass();
echo "<pre>"; var_export($a); echo "</pre>";


// Функция var_export() корректно обработает апострофы внутри значений переменных - она добавляет \ перед ними,
// чтобы результат оказался корректным кодом на PHP.
// Также для объектов функция создает описание всех свойств класса, в том числе и закрытых private
?>
