<?php

$DaftarPemainBolaTerkenalDanclubnya = [
  	"Cirstian Ronaldo" =>"juventus",
	"Lionel Messi" =>"Barcelona",
	"Luca Modric" =>"Real Madrid",
	"Mohammad Salah" =>"Liverpol",
	"Nyemar jr" =>"Paris Saint Germain",
	"Sadio Mane" =>"Liverpol",
	"Zlatan Ibrahimovic" =>"Ac Millan"
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3c</title>
</head>
<body>

	<p> Daftar Pemain Bola Terkenal Dan Clubnya</p>
	<ol>
		<li>Cirstian Ronaldo	:<?= $DaftarPemainBolaTerkenalDanclubnya["Cirstian Ronaldo"];?></li>
		<li>Lionel Messi		:<?= $DaftarPemainBolaTerkenalDanclubnya["Lionel Messi"];?></li>
		<li>Luca Modric			:<?= $DaftarPemainBolaTerkenalDanclubnya["Luca Modric"];?></li>
		<li>Mohammad Salah		:<?= $DaftarPemainBolaTerkenalDanclubnya["Mohammad Salah"];?></li>
		<li>Neymar Jr			:<?= $DaftarPemainBolaTerkenalDanclubnya["Nyemar jr"];?></li>
		<li>Sadio Mane			:<?= $DaftarPemainBolaTerkenalDanclubnya["Sadio Mane"];?></li>
		<li>Zlatan Ibrahimovic	:<?= $DaftarPemainBolaTerkenalDanclubnya["Zlatan Ibrahimovic"];?></li>
	</ol>
</body>
</html>