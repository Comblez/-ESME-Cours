<?php
//setcookie(nom cookies, valeur du cookies, date expiration (optionelle))
setcookie("premier_cookie", "bonjour");
setcookie("deuxieme_cookies","toujours la", time() + 10);
//setcookie("troisieme_cookies", "1")
//$_COOKIE["premier_cookie"];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cookies </title>
</head>
<body>
	<h1>Premier test</h1>
	<table>
		<tbody>
			<tr>
				<td>Nombre de cookies</td>
				<td> <?php echo sizeof($_COOKIE) ?>;</td>
			</tr>
		</tbody>
	</table>
	<pre>
	<?php
		print_r($_COOKIE);
	?>
	</pre>
</body>
</html>