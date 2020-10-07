<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	$t_awal= 150000;
	$bunga_t= 12.5;

	$bunga_d=($bunga_t*$t_awal)/100;
	$didapat=$bunga_d+$t_awal;
	

	?>
	<p>Tabungan Awal = Rp. 150000</p>
	<p>Tabungan Setahun = 12.5 %</p>
	<p>Total Tabungan Setahun = ?</p>
	<p>Jawaban : Rp. <?php echo $didapat; ?></p>

</body>
</html>