<?php
    // Демонстрация работы со списком (вывод на экран)
    $nameList[0] = "Yuen Wo Ping";
    $nameList[1] = "Geofrey Darrow";
    $nameList[2] = "Hugo Weaving";
    echo "А вот первый элемент массива: " . $nameList[0] . "<hr />";
    // Печатаем в цикле все элементы массива
    for ($i = 0; $i < count($nameList); $i++)
        echo $nameList[$i] . "<br />";
?>