<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Вывод параметров командной строки</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
            // В адресной строке напрямую обращаемся к файлу listing-8-1
            // например .......listing-8-1.php?this-is-the-world
            // Нижеследующая команда выведет   Данные из командной строки: this-is-the-world
        echo "Данные из командной строки: {$_SERVER['QUERY_STRING']}";
    ?>
</body>
</html>