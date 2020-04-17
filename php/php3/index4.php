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
	function f($b){
		global $a;
		$a = $b;
	}
	f(43); //appel à f modifie $a
	printf($a);
	?>
</body>
</html>