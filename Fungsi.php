<?php
function pengurangan ($angka1, $angka2)
{
    $x = $angka1;
    $y = $angka2;
    $hasil = $x - $y;
    return $hasil;
}
$hasil1 = pengurangan(9,2);
$hasil2 = pengurangan(10,5);
$hasil3 = pengurangan(3,1);
echo " Hasil Pengurangan 1 = $hasil1 </br>";
echo " Hasil Pengurangan 2 = $hasil2 </br>";
echo " Hasil Pengurangan 3 = $hasil3 </br>";
?>