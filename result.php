<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ćookies</title>
	<!-- Pobierz zależności -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<!-- Wczytaj własne skrypty i style -->
	<script src="script.js" defer></script>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div id="buts">
		<button id="back">Powrót</button>
	</div>
	<?php
	if (array_key_exists("sub1", $_POST)) {
		$name = $_POST["name1"];
		$value = $_POST["value1"];
		$date = date_format(date_create($_POST["date1"]), "U");
		setcookie($name, $value, $date);
		$date = $date - date_format(date_create(), "U");
		echo "<p>Utworzono ciasteczko o nazwie <span id=\"name\">$name</span> i wartości <span id=\"value\">$value</span>, które wygaśnie za <span id=\"date\">$date</span> sekund</p>";
	}
	if (array_key_exists("sub2", $_POST)) {
		echo "<table><tr><th>Nazwa</th><th>Wartość</th></tr>";
		for ($i = 2; $i < count($_POST["name2"]); $i++)
			echo "<tr><td id=\"name\">" . (($_POST["name2"])[$i]) . "</td><td id=\"value\">" . $_COOKIE[(($_POST["name2"])[$i])] . "</td></tr>";
		echo "</table>";
	}
	if (array_key_exists("sub3", $_POST)) {
		echo "<p>Usunięto ciasteczka o nazwach:<ul>";
		for ($i = 2; $i < count($_POST["name3"]); $i++) {
			setcookie((($_POST["name3"])[$i]), "", 0);
			echo "<li><span id=\"name\">" . (($_POST["name3"])[$i]) . "</span></li>";
		}
		echo "</ul></p>";
	}
	?>
</body>

</html>