<?php
require_once 'rsanold.php';

if(!isset($_POST['submit'])){
die;
}
$kuncip = $_POST['kuncip'];
$kunciq = $_POST['kunciq'];
$plaintext = $_POST['plaintext'];


$rsanold = new RsaNold($kuncip, $kunciq);


$hasilenk = $rsanold->enkripsi($plaintext);



?>



<table>
	<tr>
		<td>Nilai P</td>
		<td>:</td>
		<td><?= $kuncip ?></td>
	</tr>
	<tr>
		<td>Nilai Q</td>
		<td>:</td>
		<td><?= $kunciq ?></td>
	</tr>
	<tr>
		<td>Nilai N</td>
		<td>:</td>
		<td><?= $rsanold->n ?></td>
	</tr>
	<tr>
		<td>Nilai M</td>
		<td>:</td>
		<td><?= $rsanold->m ?></td>
	</tr>
	<tr>
		<td>Nilai E</td>
		<td>:</td>
		<td><?= $rsanold->kunciE ?></td>
	</tr>
	<tr>
		<td>Nilai D</td>
		<td>:</td>
		<td><?= $rsanold->kunciD ?></td>
	</tr>
	<tr>
		<td>ChipperText</td>
		<td>:</td>
		<td><?= $hasilenk ?></td>
	</tr>
</table>

<h1>Form Dekripsi Text</h1>

<form action="dekrip.php" method="POST">
	<table>
		<tr>
			<td>Input Plain Text</td>
			<td>:</td>
			<td><input type="text" value="<?= $hasilenk ?>" name="chippertext"></td>
			<input type="hidden" name="kuncip" value=<?php echo $kuncip ?>>
			<input type="hidden" name="kunciq" value=<?php echo $kunciq ?>>
		</tr>
		<tr>
			<td><button type="submit" name="dekrip">Dekripsi Text</button></td>
		</tr>
	</table>
</form>

