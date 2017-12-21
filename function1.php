<?php
	function numbering()
	{
		$i = 0;
		while ($i < 10) {
			echo $i;
			$i += 1;
		}
	}

	//numbering();

	function test($default = 1)
	{
		echo $default;
	}

//	test();

	function test2($a, $b)
	{
		echo $a + $b;
	}

	test2(1, 2, 3, 4, 5);

?>