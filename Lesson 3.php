<?php
interface Calculate
{
	public function FunctionCalculate();

}


class Kvadrat implements Calculate
{
	public $x;
	public $y;

	function __construct($x,$y)
	{
		$this->x = $x;
		$this->y = $y;
	}

	public function FunctionCalculate()
	{
		return $this->x * $this->y;
	}
}

$obj = new Kvadrat(5,5); // Пример интерфейса
echo $obj->FunctionCalculate();
echo "<br>";

class Pramougol extends Kvadrat
{}

$obj2 = new Pramougol(3,3);
echo $obj2->FunctionCalculate();
echo "<br>";

class Xren extends Pramougol
{}

$obj3 = new Xren(7,7);
echo $obj3->FunctionCalculate();
echo "<br>";

class One
{

}

$obj4 = new One;
echo $obj4->$fak = 'jfhgdkj';

var_dump($obj4);


$a[] = '5';
var_dump($a);
?>
