<?php

$sqlConnect = mysqli_connect('localhost', 'morlenko', 'neto1579', 'global');
mysqli_set_charset($sqlConnect, "utf8");

if (!$sqlConnect) {
	echo 'Соединение с базой данной не установлено';
	exit;
}

$sql = "SELECT * FROM books";
$result = mysqli_query($sqlConnect, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Домашнее задание к лекции 4.1</title>

	<style>
		table {
			border: 1px solid;
			border-collapse: collapse;
		}
		th, td {
			padding: 4px 8px;
			border: 1px solid;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Название</th>
			<th>Автор</th>
			<th>Год выпуска</th>
			<th>Жанр</th>
			<th>ISBN</th>
		</tr>
		<?php
		while ($bookArray = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?=$bookArray['name']?></td>
			<td><?=$bookArray['author']?></td>
			<td><?=$bookArray['year']?></td>
			<td><?=$bookArray['genre']?></td>
			<td><?=$bookArray['isbn']?></td>
		</tr>
		<?php	
		}
		?>
	</table>
</body>
</html>