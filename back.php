<?php

// Сергей Литвинов
/*
15.08.2021
 */

//echo "Приветствую";

/*$nameChenel;
$colorAuto;
$waterTempricher;
$phoneModel;

$a = 3;
$b = 5;
$c = 8;

echo $a,$b,$c;

$sum = $a + $b + $c;
echo "$sum";*/

$a = 6;
$b = 1;
echo "$a,$b";

echo "<br>";

$c = $a;
$d = $b;
echo "$c,$d";

echo "<br>";

$a = null;
$b = 13;
echo "$a,$b,$c,$d";

echo "<br>";

define('ROT', '41');
const COT = 33;
$SUM = ROT + COT;
echo "$SUM<br>";

echo "<br>";

define('ROT', '55');

echo ROT;

$people = ['1' => ['name' => 'Sergey', 'lastName' => 'Litvinov', 'jfgdfkj' => 'bsdjfb'], '2' => ['name' => 'Andrey', 'lastName' => 'Zanizdra']];
echo "<pre>";
print_r($people);
echo "</pre>";

$sumPeople = count($people['1']);
echo "$sumPeople";

echo "<br>";

if ($a>$b) {
	echo "Верно";
}elseif ($a==$b) {
	echo "переменные равны";
}else {
	echo "Неверно";
}

echo "<br>";

echo $a>$b ? 'Верно':'Неверно';

echo "<br>";

if (isset($a)) {
	echo "существует";
}else {
	echo "не существует";
}

echo "<br>";

$status = true;

echo ($status) ? "включен" : "выключен"; // пример тернарного оператора для правда или ложь
$ternOper = ($status) ? "включен" : "выключен"; // присвоил значение переменной
echo "<br>";
echo "$ternOper";

echo "<br>";
$userNames = ['petya', 'vasya', 'evgeny'];

for ($i = 0; $i < count($userNames); $i++) {
  print_r("$userNames[$i] <br>");
}

$i = 0;
while ($i < count($userNames)) {
	print_r("$userNames[$i] <br>");
	$i++;
}

$x=0;
do {
	$x++;
	echo 'hay';
}while ($x<=5);

$x = 13;
do {
	$x--;
	echo $x;
} while ($x > 10)

?>


<html>
<head>
	<title>Document</title>
</head>
<body>
<h1> <?= $people['1']['name']; ?> </h1>


</body>
</html>