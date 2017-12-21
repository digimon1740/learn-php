<?php
	$arr = [1, 2, 3, 4];
	array_push($arr, 5);
	var_dump($arr);

	echo "<br/>";

	$mergedArray = array_merge($arr, [6, 7, 8]);
	var_dump($mergedArray);

	echo "<br/>";

	$li = ['a', 'b', 'c', 'd', 'e'];
	array_unshift($li, 'z');
	var_dump($li);

	echo "<br/>";

	$li = ['a', 'b', 'c', 'd', 'e', 'z'];
	array_splice($li, 2, 0, 'B');
	var_dump($li);

	echo "<br/>";

	$li = ['a', 'b', 'c', 'd', 'e', 'z'];
	array_shift($li);
	var_dump($li);

	echo "<br/>";

	$li = ['a', 'b', 'c', 'd', 'e', 'z'];
	array_pop($li);
	var_dump($li);

	echo "<br/>";

	$li = ['c', 'e', 'a', 'b', 'd'];
	sort($li);
	var_dump($li);

	echo "<br/>";

	$li = ['c', 'e', 'a', 'b', 'd'];
	rsort($li);
	var_dump($li);
?>


