<?php
session_start();
$a = session_id();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Php4</title>
</head>
<body>
	<h1>PHP4 - Variables superglobales</h1>
	<?php
	echo '<P> Variable $_GET:</p>';
	print_r($_GET);

	echo '<P> Variable $_SERVER:</p>';
	echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";

	echo '<P> Variable $_COOKIE:</p>';
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	echo '<P> Variable $GLOBALS:</p>';
	echo "<pre>";
	print_r($GLOBALS);
	echo "</pre>";
	?>

	<h1>PHP4 - Session</h1>
	<p>Le numero de session est <?= $a; ?></p> <!-- équivaut à <?php echo $a; ?> -->

</body>
</html>