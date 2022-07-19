<?php
	echo("<link rel='stylesheet' href='kalender.css'>");
	echo "<title>Kalender Bulan Ini</title>";
	// mengambil tanggal sistem saat ini (1 - 31)
	$hari = date("d");
	// mengambil tanggal sistem saat ini (1 - 12)
	$bulan = date("m");
	// mengambil tahun sistem saat ini
	$tahun = date("Y");
	// mencari jumlah hari bulan dan tahun ini
	$jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
?>
<?php
	switch ($bulan){
		case 1 : $nmbulan = "Januari"; break;
		case 2 : $nmbulan = "Febuari"; break;
		case 3 : $nmbulan = "Maret"; break;
		case 4 : $nmbulan = "April"; break;
		case 5 : $nmbulan = "Mei"; break;
		case 6 : $nmbulan = "Juni"; break;
		case 7 : $nmbulan = "Juli"; break;
		case 8 : $nmbulan = "Agustus"; break;
		case 9 : $nmbulan = "September"; break;
		case 10 : $nmbulan = "Oktober"; break;
		case 11 : $nmbulan = "Nopember"; break;
		case 12 : $nmbulan = "Desember"; break;
	}
	echo "<h1>$nmbulan $tahun</h1>";
?>
<br>
<table align="center" cellpadding = "10">
	<tr bgcolor="#add8e6">
		<td align="center"><font color="#6fb98f">Min</font></td>
		<td align="center">Sen</td>
		<td align="center">Sel</td>
		<td align="center">Rab</td>
		<td align="center">Kam</td>
		<td align="center">Jum</td>
		<td align="center">Sab</td>
	</tr>
<?php
	$s = date("w", mktime(0,0,0,$bulan,1,$tahun));
	for ($ds=1; $ds<=$s; $ds++){ 
		echo "<td></td>";
	}
	for ($d=1; $d<=$jumlahhari; $d++){ 
		// jika minggu ke 0, maka buat baris baru
		if(date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 0){
			echo "<tr>";
		}
		$warna = "#000000"; // warna default
		// jika hari Minggu beri warna merah
		if(date("l",mktime(0,0,0,$bulan,$d,$tahun)) == "Sunday"){
			$warna = "#6fb98f";
		}
		// beri warna default tanggal tiap harinya (selain hari minggu)
		echo "<td align=center valign=middle><span style=\"color:$warna\">$d</span></td>";
		// jika hari ke enam, akhiri baris
		if(date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 6){
			echo "</tr>";
		}
	}
	echo "</table>";
	echo "<div class='card'>";
	echo "<a href='index.html'>:: Menu Utama ::</a><br>";
	echo "</div>";
?>