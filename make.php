<?php
    	
		//echo nl2br($_POST['ip1']);
	
	$arr1 = preg_split('/\r\n|\r|\n/', $_POST[ip1]);
	$arr2 = preg_split('/\r\n|\r|\n/', $_POST[ip2]);
	
	//print_r(preg_split('/\r\n|\r|\n/', $_POST['ip1']));
	//var_dump(explode(preg_split('/\r\n|\r|\n/', $_POST['ip1'])));
	//echo $array[0];
	
	
	
/*for($i=0; $i < count($arr1); $i++) {
    echo $arr1[$i]."<br>";
}
for($i=0; $i < count($arr2); $i++) {
    echo $arr2[$i]."<br>";
}*/

	$c = array_intersect($arr1, $arr2);
	//print_r($c);
	
	
	foreach($c as $mutual) {
		echo $mutual. "<br>";
	}
	
	/*for($i=0; $i < count($c); $i++) {
		echo $c[$i]."<br>";
	}


/*
function explodeInput($_POST) {
	return preg_split('/\r\n|\r|\n/', $_POST);
}

    $union =                            //  $b =   2   4 5 6
        array_merge(
            array_intersect($a, $b),    //         2   4
            array_diff($a, $b),         //       1   3
            array_diff($b, $a)          //               5 6
        );   