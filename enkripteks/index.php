<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enkripsi</title>
</head>
<body>
	<h1>Aplikasi Enkripsi dan Dekripsi Text Menggunakan Algoritma RSA</h1>
	<form action="enkrip.php" method="POST">
		<table>
			<tr>
				<td>Input Nilai P</td>
				<td>:</td>
				<td><input type="text" name="kuncip"></td>
			</tr>
			<tr>
				<td>Input Nilai Q</td>
				<td>:</td>
				<td><input type="text" name="kunciq"></td>
			</tr>
			<tr>
				<td>Input Plain Text</td>
				<td>:</td>
				<td><input type="text" name="plaintext"></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit">Enkripsi Text</button></td>
			</tr>
		</table>
	</form>
</body>
</html>