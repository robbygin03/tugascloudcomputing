<?php 
$bil1 = $_POST ["nilaia"];
$bil2 = $_POST ["nilaib"];

$hasil1 = $bil1 + $bil2;
$hasil2 = $bil1 - $bil2;
$hasil3 = $bil1 / $bil2;
$hasil4 = $bil1 * $bil2;

echo "hasil $bil1 + $bil2 = $hasil1<br>";
echo "hasil $bil1 - $bil2 = $hasil2<br>";
echo "hasil $bil1 : $bil2 = $hasil3<br>";
echo "hasil $bil1 x $bil2 = $hasil4<br>";
 ?>