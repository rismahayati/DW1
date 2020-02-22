<?php
$jam1 = 10*3600 + 25*60 + 21;
$jam2 = 12*3600;
$waktu = $jam2-$jam1;
$interval = 10*60;
$jaminterval = $waktu / $interval;
$sisawaktu = $waktu % $interval;
$v = 6;
$totjarak = 0;
$i = 1;


echo "
<h1> Program Hitung Waktu Tempuh</h1>

<p>Waktu yang ditempuh (Detik) : <b>$waktu</b>
<p>Interval Penambahan Kecepatan (Detik) : <b>$interval</b>
<p>Penambahan Kecepatan Terakhir : <b>$jaminterval Kali dan sisa detik Kecepatan terakhir $sisawaktu</b>
";
while ( $i<= $jaminterval) {
	
$jarak = $interval * $v;
$totjarak = $totjarak + $jarak;

$v=$v+1;
$i=$i+1;

}
?>