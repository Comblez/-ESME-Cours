<?php
session_start();
$b = session_id();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Info_Exercice_Cours</title>
</head>
<body>
	<h1>Info</h1>
	<p>Le numero de session est <?= $b; ?></p>
	<table>
		<tbody>
			<?php
				foreach ($_SESSION as $key => $value) {
					if (in_array($key, ["nom", "prenom"])) {
						echo "<tr><td>$key</td><td>$value</td></tr>";
					}
				}
			?>
			
		</tbody>
	</table>

</body>
</html>