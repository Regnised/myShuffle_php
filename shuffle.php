
<?php
	$myArray = array('one','two','three','four','five','six');
	$newArray = array();
	$cnt = count($myArray);
	$rnd = array();
	echo 'Массив до:<br>';
	print_r($myArray);
	while(count($rnd)<$cnt){
		$myRandNum = rand(0,$cnt-1);
		if (array_search($myRandNum, $rnd) === false){
  		array_push($rnd, $myRandNum);
  		array_push($newArray, $myArray[$myRandNum]);
		}
	}
	echo '<br>Массив после:<br>';
	print_r($newArray);
