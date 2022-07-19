<?php
	echo "<link rel='stylesheet' href='form.css'>";
	echo "<title>Form Sederhana</title>";
	include 'hdr.html';
	include 'form.html';
	$nim = @$_POST['nim'];
	$nama = @$_POST['nama'];
	$kota = @$_POST['kota'];

	// simpan ke dalam file 
	$fileku=fopen("data.txt", "a+"); 
	fputs ($fileku,"$nim|$nama|$kota\n");
	fclose($fileku);
	// tampilkan data
	include 'lihat.php' 
?>