<?php

// array adalah tipe data bentukan dari tipe data dimana array membentuk tipe data agar berurutan


// contoh array non array

$siswa0="joko";
$siswa1="andi";
$siswa2="reihan";
$siswa3="doni";
echo $siswa1;

echo "<br>";

// contoh array 
$namasiswa=array('andi','jodi','randi','mahfud');
var_dump($namasiswa[1]);

echo"<br>";

$hari=['januari','febuari','maret','april','mei','juni','juli'];
if ($hari[1]) { 
    echo "ini adalah bulan $hari"; 
}

echo "<br>";

$mata_kuliah=['MTK','BIndo','Ips','IPA'];

echo ($mata_kuliah[1]);
echo "<br>";
// array bisa di gunakan dalam menentukan banyaknya nilai dalam variable
// Element Array -> setelah di definisikan, kita bisa menambah elemnt array

$macam2=array(121,'PHP',17.4,'CSS','HTML');
$macam2[]="Dunia kepin";
$macam2[]='kehidupan kepin';
$macam2[]=12;

echo "<pre>";
var_dump($macam2);
echo "</pre>";
// output --> Float (17.4)

// untuk mengahapus nilai array kita bisa menggunakan fungsi ' unset() ' 
// Menghapus element array
echo"<ber>";
$macam2=array(121,'PHP',17.4,'CSS','HTML');
$macam2[]="Dunia kepin";
$macam2[]='kehidupan kepin';
$macam2[]=12;


// hapus element array menggunakan fungsi unset()
unset($macam2[2]);
echo "<pre>";
var_dump($macam2);
echo "</pre>";




?>