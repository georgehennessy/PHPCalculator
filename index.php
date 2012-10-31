<!doctype html>
<html lang="en-US">
<head>
<meta charset=utf-8>
<title>PHP Calculator</title>	
</head>
<body>

<p>Answer: 
<?php

	require_once 'classes/calculator.php';
	
	//instantiate class
	$calc = new Calculator();
	
	$calc->add(10);
	$calc->add(5);
	$calc->subtract(2);
	$calc->multiply(2);
	$calc->divide(2);
	
	echo $calc->getTotal();

?>

</body>
</html>