<?php
$fruits = array('apple', 'banana', 'orange', 'grapes');
foreach ($fruits as $fruit) {
	echo $fruit;
	echo "<br>";
}

$employee = array('name' => 'john smith', 'age' => 30, 'profession');
foreach ($employee as $key => $value) {
	echo sprintf("%s: %s <br>", $key, $value);
}
