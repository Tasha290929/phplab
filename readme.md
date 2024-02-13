# Лабораторная работа 2
## Задание 1
1. Создайте файл index.php, который содержит следующий код: (код файла index.php)
2. Анализируйте скрипт и объясните, что он реализуют.

_Создается 3 переменные и присваивается им значение ```$nume = 'Иванов'; $prenume = 'Николай'; $varsta = 30;``` далее используется echo и print для вывода строки, в которой встроены значения переменных $nume и $prenume. Во-ворой строке вывод строки со значением $varsta. (br ) тег для переноса на новую стоку_

3. Сохраните файл.
4. Запустите веб сервер.
5. Интерпретируйте скрипт index.php используя виртуальный адрес скрипта. (http://lab2/index.php)
6. Проанализируйте результат.

_данный скрипт выводит информацию о клиенте:
Фамилия клиента Иванов, а его имя Николай.
Возраст клиента 30._

## Задание 2.
1. Добавьте в созданный файл index.php, скрипт
2. Сохраните и интерпретируйте скрипт.

_Эта часть кода присваивает переменной $d функцию date для получения текущего дня недели и проверяет, является ли он пятницей (Fri). В зависимости от результата этой проверки, скрипт выводит разные сообщения. Аргумент "D" указывает, что нужно получить сокращенное название дня недели (например, "Mon", "Tue", и так далее). Используется условная конструкция if --- else  для проверки условия , является ли значение переменной $d равным строке "Fri" (пятница)._

3. Проанализируйте результат.

_Выводится "Приятного рабочего дня, вам!" так как сегодня не пятница, а в пятницу выведется Хороших вам выходных!_

4. Замените if…else на тернарный оператор. Анализируйте полученный результат.

```php
$d = date("D");
$messege = ($d == "Fri" ) ? "<br />Хороших вам выходных!" : "<br />Приятного рабочего дня, вам!"; 
```
_В этой строке используется тернарный оператор для присвоения переменной $message одного из двух сообщений в зависимости от того, является ли текущий день недели пятницей или нет._

5. Комментируйте использование тернарного оператора, оставив if…else и правильно добавьте следующий скрипт:

```php
…elseif ($d=="Sun")
 echo "<br />Завтра начинается новая рабочая
неделя!"; …
```

6. Сохраните и интерпретируйте скрипт.

_elseif ставится между if и else_

7. Проанализируйте результат.

_В воскресенье выведет : "Завтра начинается новая рабочая неделя!"_

8. замените буквенный параметр дня недели на цифровой в предыдущий скрипт (w – 0-6)

```php
$d = date("w");
if ($d == 5) { // Пятница соответствует числовому значению 5
    ?>
    <br />Хороших вам выходных!
    <?php
} elseif ($d == 0) { // Воскресенье соответствует числовому значению 0
    ?>
    <br />Завтра начинается новая рабочая неделя!
    <?php
} else {
    ?>
    <br />Приятного рабочего дня, вам!
    <?php
}
```
9. Сохраните и интерпретируйте скрипт.

_В этой версии кода date("w") возвращает числовое значение дня недели (0 - воскресенье, 1 - понедельник, и так далее). Условия в блоках if и elseif теперь сравнивают $d с числовыми значениями._

# Задание 3
1. Создайте файл operator.php, который
содержит обработку данных оператором if и
тернарным оператором.
```php
<?php
//пример с if
$varsta = 22;
if (($varsta > 12) && ($varsta < 20)) {
$mesaj=" вы подросток!";
} elseif ($varsta > 40) {
$mesaj=" вы взрослый человек!";
} else {
$mesaj=" вы в рассвете сил ...
приступайте к работе!";
}
//тернарный оператор
$nume = "Аня";
echo ($nume) ? $nume.', '.$mesaj : 'Anonymous,
'.$mesaj;
?>
```
2. Проанализируйте скрипт и обьясните что он реализует.

_обьявляются 2 переменные``` $mesaj, $varsta , если $varsta > 12 и < 20``` выводится сообщение " вы подросток!", если ```$varsta > 40 " вы взрослый человек!" ```, в остальных случаях "вы в рассвете сил ... приступайте к работе!". в тернарном операторе выводится имя переменной если $nume не пусто, выводится имя $nume и сообщение $mesaj, в противном случае выводится "Anonymous" и сообщение $mesaj_

3. Сохраните файл и запустите скрипт.

_Результат : "Аня, вы в рассвете сил ... приступайте к работе!"_

4. Проанализируйте результат.

_так как переменная nume не пустая выводится имя (Аня), а параметр возраста = 22 , выводится соответствующее сообщение_

5. Прокомментируйте строку в которой ставится в соответствие значение переменной nume.Интерпретируйте скрипт. Что вы заметили?

_В данном случае, так как $nume установлено в "Аня", будет использоваться это имя при выводе сообщения.
В строке с тернарным оператором проверяется не только пустота переменной $nume, но и её истинность (так как echo ($nume) будет истинным при наличии значения).
Скрипт демонстрирует использование условных операторов и тернарного оператора для принятия решений в зависимости от значения переменных._


## Задание 4.
1. Используя switch () и функцию date(), с соответствующим параметром, проверьте день недели и выведите на русском: «Сегодня, день недели, дд.мм.гг» 
в файле operator.php

### Домашнее задание
1. Используя функцию „date()” из PHP и HTML
элементы для создания таблиц, создайте
таблицу с следующим контентом:
График работы докторов, каб. 333
П.н. Фамилия, имя График
1. Аксенти Елена xx - xx
2. Петрова Мария yy - yy
Вместо xx-xx, выведите 8:00-12:00, если день
недели понедельник, среда или пятница. В
обратном случае выведите „Нерабочий день”.
Вместо yy-yy, выведите 12:00-16:00, если день
недели вторник, четверг или суббота. В
обратном случае выведите „Нерабочий день”.
в таблице так же как в примерах выше используется условный оператор if --- else для определения дня недели и вывода нужных сообщений.
