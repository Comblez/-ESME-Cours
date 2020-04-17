<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Php3</title>
</head>
<body>
	<h1>PHP3</h1>
	<h2>Exercices</h2>
	<h3>Exercice1</h3>
<?php
	function cubic($x){
		return $x*$x*$x;
	}
	$tableau1 = array(3,8,15,16);
	$tableau2 = array();
	for($i = 1; $i<21; i++){
		if(!in_array($i, $tableau1)){
			//$tableau2->append($i); 
			$tableau2[] = cubic($i);
		}
	}

	//var_dump($tableau2 instanceof ArrayObject); 
	//verifier si on a bien instancier ce que nous voulions
	print_r($tableau1);
	echo "<br>\n";
	print_r($tableau2);

	echo "<table>\n";
	echo "<tbody>\n";

	/*for($i=0; $i<sizeof(tableau2); i++){

	}*/

	echo "</tbody>\n";
	echo "</table>\n";

?>


</body>
</html>