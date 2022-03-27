<?php

$products = array(
    array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
    array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
    array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
);

var_dump($products);



	$sumpok = 0;
	$coltov = 0;
foreach ($products as $key) {
	$coltov = $coltov + $key['quantity'];
	$sumpok += $key['price'] * $key['quantity'];

}

	echo "$coltov<br>";
	echo $sumpok;



?>