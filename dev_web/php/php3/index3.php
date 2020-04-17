<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Php3</title>
</head>
<body>
	<h1>PHP3</h1>
	<h2>Les fonctions III</h2>
	<?php
	$a = 42;
	printf($a);
	function f($a){
		$a = 43;
		return $a;
	}
	f($a);
	$a = f($a);
	printf($a);

	function g(&$toto){
		$toto = ":)";
	}
	g($a);
	printf($a);
	?>
</body>
</html>