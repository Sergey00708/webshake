<?php

class Cat
{
private $name;
public $color;
public $weight;


public function __construct(string $name,$color,$weight)
{
	$this->name = $name;
	$this->color = $color;
	$this->weight = $weight;
}
public function pokaz()
{
	return "{$this->name}"."{$this->color}"."{$this->weight}";
}
public function sayHello()
{
	echo 'Привет, меня зову'.' '.$this->name;
}
public function setName(string $name)// сеттер
{
	$this->name = $name;
}
public function getName(): string// геттер
{
	return $this->name;
}
}

$cat1 = new Cat('Kolya','green','3');

echo $cat1->getName();
echo "<br>";
echo $cat1->pokaz();
echo "<br>";


class human extends Cat{}// наследование, класс хуман унаследовал все от кет
$guy = new human('Sergey','skin','74');
echo $guy->pokaz();
echo "<br>";
echo $guy->sayHello();

?>