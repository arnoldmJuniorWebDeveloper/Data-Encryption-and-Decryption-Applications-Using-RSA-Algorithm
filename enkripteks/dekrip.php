<?php
require_once 'rsanold.php';

if(!isset($_POST['dekrip'])){
die;
}
$kuncip = $_POST['kuncip'] ;
$kunciq = $_POST['kunciq'];
$chippertext = $_POST['chippertext'];


$rsanold = new RsaNold($kuncip, $kunciq);


$hasildek = $rsanold->dekripsi($chippertext);



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
		<td>PlainText</td>
		<td>:</td>
		<td><?= $hasildek ?></td>
	</tr>
</table>