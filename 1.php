<?php
// Diketahui
$kura = 9999;
$kuramati = 0.211;
$hariberanak = 90;
$totalhari = 365;

// Dijawab
$kuramati2 = $kura * $kuramati;

$kuramati3 = $kura - $kuramati2;

$totalhari2 = $totalhari / $hariberanak;

$totalkura2 = $totalhari2 * $kuramati3;

echo "Total Kura Kura Dalam 365 Hari : " . round($totalkura2);
