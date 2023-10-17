<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ćookies</title>
	<!-- Pobierz zależności -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<!-- Wczytaj własne skrypty i style -->
	<script src=" script.js" defer></script>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div id="buts">
		<button id="but1">Utwórz</button>
		<button id="but2">Wyświetl</button>
		<button id="but3">Usuń</button>
	</div>
	<form name="form1" id="form1" method="post" action="result.php" class="forms">
		<label for="name1">Nazwa:</label>
		<input name="name1" id="name1" type="text" required>
		<label for="value1">Wartość:</label>
		<input name="value1" id="value1" type="text" required>
		<label for="date1">Data wygaśnięcia:</label>
		<input type="datetime-local" id="date1" name="date1" required>
		<input type="submit" name="sub1" id="sub1" value="Utwórz">
	</form>
	<form name="form2" id="form2" method="post" action="result.php" class="forms">
		<label for="name2">Wybierz nazwy do wyświetlenia wartości:</label>
		<div id="name2">
			<input type="hidden" name="name2[]" value="ph1">
			<input type="hidden" name="name2[]" value="ph2">
		</div>
		<input type="submit" name="sub2" id="sub2" value="Wyświetl">
	</form>
	<form name="form3" id="form3" method="post" action="result.php" class="forms">
		<label for="name3">Wybierz nazwy do usunięcia:</label>
		<div id="name3">
			<input type="hidden" name="name3[]" value="ph1">
			<input type="hidden" name="name3[]" value="ph2">
		</div>
		<input type="submit" name="sub3" id="sub3" value="Usuń">
	</form>
</body>

</html>