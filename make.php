<?php
    	
		
	
	$arr1 = preg_split('/\r\n|\r|\n/', $_POST[ip1]);
	$arr2 = preg_split('/\r\n|\r|\n/', $_POST[ip2]);	

	$c = array_intersect($arr1, $arr2);

	foreach($c as $mutual) {
		echo $mutual. "<br>";
	}

