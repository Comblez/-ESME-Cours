<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP1</title>
</head>
<body>
	<h1>PHP 1</h1>
	<?php
	//instanciation tableau
	//taille inconnu
	$mon_tableau = array();

	$taille = 10;
	for($i= 0; $i<$taille; $i++) {
		$mon_tableau[] = char($i + 65);
	}
	?>
	<pre>
		<?php print_r($mon_tableau); ?>
	</pre>
	<?php
	for ($j=0; $j < $taille ; $j++) { 
		echo "<p>$mon_tableau[$j]</p>\n";
	}
	?>
</body>
</html>
=======
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP1</title>
</head>
<body>
	<h1>PHP 1</h1>
	<?php
	//instanciation tableau
	//taille inconnu
	$mon_tableau = array();

	$taille = 10;
	for($i= 0; $i<$taille; $i++) {
		$mon_tableau[] = char($i + 65);
	}
	?>
	<pre>
		<?php print_r($mon_tableau); ?>
	</pre>
	<?php
	for ($j=0; $j < $taille ; $j++) { 
		echo "<p>$mon_tableau[$j]</p>\n";
	}
	?>
</body>
</html>
>>>>>>> 6bdce4e2437fa28d4da2a35bdceb106471a91a24
