<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Вывод IP-адреса и браузера пользователя</title>
    <meta charset="utf-8">
</head>
<body>
    Ваш IP-адрес: <?= $_SERVER['REMOTE_ADDR'] ?><br />
    Ваша браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?><br />
</body>
</html> 