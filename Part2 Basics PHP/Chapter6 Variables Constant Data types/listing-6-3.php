<?php
// Ссылки на объекты

// Объявляем новый класс
class AgentSmith {}

// Создаем новый объект класса AgentSmith
$first = new AgentSmith();

// Присваиваем значение атрибуту класса
$first->mind = 0.123;

// Копируем объекты
$second = $first;

// Изменям разумность у копии
$second->mind = 100;

echo "First mind: {$first->mind}, second: {$second->mind}";

// Значения одинаковые. В PHP переменная хранит не сам объект, а лишь ссылку на него.
?>
