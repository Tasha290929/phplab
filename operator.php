<?php
//пример с if
$varsta = 22;
if (($varsta > 12) && ($varsta < 20)) {
$mesaj=" вы подросток!";
} elseif ($varsta > 40) {
$mesaj=" вы взрослый человек!";
} else {
$mesaj=" вы в рассвете сил ... приступайте к работе!";
}
//тернарный оператор
$nume = "Аня .";
echo ($nume) ? $nume.', '.$mesaj : 'Anonymous,'.$mesaj;


// Получаем текущий день недели в виде числа (1 - Понедельник, ..., 7 - Воскресенье)
$dayOfW = date("N");
$dayOfWeekR = '';

// Используем switch() для определения русского названия дня недели
switch ($dayOfW) {
    case 1:
        $dayOfWeekR = 'Понедельник';
        break;
    case 2:
        $dayOfWeekR = 'Вторник';
        break;
    case 3:
        $dayOfWeekR = 'Среда';
        break;
    case 4:
        $dayOfWeekR = 'Четверг';
        break;
    case 5:
        $dayOfWeekR = 'Пятница';
        break;
    case 6:
        $dayOfWeekR = 'Суббота';
        break;
    case 7:
        $dayOfWeekR = 'Воскресенье';
        break;
}

$cur = date("d.m.y");

// Выводим результат
echo "<br>Сегодня, $dayOfWeekR, $cur";