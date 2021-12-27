<?php


$koordinat=[[2,5],[3,4],[5,6]];
echo "<pre>";
var_dump($koordinat[2][1]);
echo $koordinat[0][1];
echo $koordinat [0][0];
echo "<br>";
echo $koordinat[2][0];
echo "</pre>";
echo "<br>";

// latihan
// kita mempunyai nilai yaitu 2 5 9 12 
// tampilkan hanya angka 12 dan 2 dalam bentuk array

// $nilai =[[2,5],[9,12]];
// echo $nilai[1][1];
// echo "<br>";
// echo $nilai[0][0];

// coba kita pakai tipe data strinng
// latihan 
// kita mempunyai nilai tipe data string 'jakarta dan bandung, surabaya dan jogja, solo dan makasar '
// tampilkan hanya surabaya dan solo
// lakukan dengan menggunakan array multi dimensi

$kota =[['jakarta','bandung'],['surabaya','jogja'],['solo','makasar']];

// ini mengambil 1 nilai array
// print_r($kota [1][0]) ;
// echo "<br>";
// print_r($kota[2][0]);

echo "<pre>";
print_r($kota);
echo "</pre>";

//array 3 dimensi 
$huruf =[[["A","B"]],[["C","D"]]];

echo"<pre>";
print_r($huruf);
echo"</pre>";


?>