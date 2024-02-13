<?php
$nume = 'Иванов';
$prenume = 'Николай';
echo "Фамилия клиента $nume, а его имя $prenume ";
$varsta = 30;
print "<br />Возраст клиента  $varsta ";

//задание 2
$d = date("D");
if ($d == "Fri") {
?>
    <br />Хороших вам выходных!
<?php } elseif ($d == "Sun") {
?>
    <br />Завтра начинается новая рабочая неделя!
<?php } else { ?>
    <br />Приятного рабочего дня, вам!
<?php }


//тернарный оператор 
/*
$d = date("D");
$messege = ($d == "Fri" ) ? "<br />Хороших вам выходных!" : "<br />Приятного рабочего дня, вам!";
echo $messege;
*/

$d = date("w");

if ($d == 5) { // Пятница соответствует числовому значению 5
?>
    <br />Хороших вам выходных!
<?php } elseif ($d == 0) { // Воскресенье соответствует числовому значению 0 
?>
    <br />Завтра начинается новая рабочая неделя!
<?php } else { ?>
    <br />Приятного рабочего дня, вам!
<?php }
