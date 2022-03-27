<?php
/*$color = ['white', 'green', 'red'];
foreach ($color as $key) {
	echo "$key","\n";
}

sort($color);
echo "<ul>";
foreach ($color as $y) {
	echo "<li>$y</li>";
}
echo "</ul>";*/



class guy
{

	function foo($a)
	{
		echo "$a";
	}
}

$guy = new guy;
$guy->foo('Привет');


?>