<?php
    $fileku = fopen("data.txt", "r");
	echo("<hr>");
	echo "<table border='0'>";
	while ($isi = fgets($fileku)) {
		$pisah = explode('|', $isi);
		echo "<tr><td>NIM  </td><td> : $pisah[0]</td></tr>";
		echo "<tr><td>Nama </td><td> : $pisah[1]</td></tr>";
		echo "<tr><td>kota </td><td> : $pisah[2]</td></tr>";
		echo("<tr><td><hr></td></tr>");
	}
	echo "</table>";
	echo("</div>")
?>