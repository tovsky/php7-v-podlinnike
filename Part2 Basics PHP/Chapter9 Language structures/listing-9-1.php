<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Альтернативный синтаксис if-else.</title>
</head>
<body>
<?php if (isset($_REQUEST['go'])):?>
    Привет, <?=$_REQUEST['name']?>!
<?php else:?>
    <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
        Ваше имя: <input type="text" name="name"><br />
        <input type="submit" name="go" value="Отослать!">
    </form>
<?php endif ?>
</body>
</html>