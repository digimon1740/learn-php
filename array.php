<?php
	$member = ['egoing', 'k8805', 'sorialgi', 11];
	echo $member[0];
	echo $member[1];
	echo $member[2];
	echo $member[3];

	function get_members()
	{
		return ['egoing', 'k8805', 'sorialgi'];
	}

	$tmp = get_members();
	echo $tmp[1];

	function get_members2()
	{
		return ['egoing', 'k8805', 'sorialgi'];
	}

	echo get_members()[1];

	function arr_func($arr)
	{
		echo $arr[0];
	}

	arr_func([1, 2, 3, 4]);


	for ($i = 0; count($member); $i++) {
		echo $member[$i];
	}


?>

