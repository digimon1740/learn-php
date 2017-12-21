<?php

	$grades = ['tony' => 100, 'jeonga' => 90];

	echo $grades['tony'];

	echo "<br/>";

	$newGrades = [];
	$newGrades['tony'] = 100;
	$newGrades['jeonga'] = 200;

	echo $newGrades['jeonga'];

	echo "<br/>";

	$grades = ['egoing' => 10, 'k8805' => 6, 'sorialgi' => 80];
	foreach ($grades as $key => $value) {
		echo "key: {$key} value:{$value}<br />";
	}
?>