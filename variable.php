<?php
//variable di gunakan sebagai pembungkus dari sebuah tipe data
// ada 2 jenis penulisan variable yakini, dengan menggunakan single quote '', atau double qoute
// varible php adalah tipe dari varible typeless programming, yaitu variable yang nilai bisa di isi langsung oleh type data
// kita bisa lihat type data tersebut dengan menggunakan var_dump (), dalam kurung di isi oleh variable
$nama="kepin";
$alamat="Cipondoh Tangerang";
$jenis_kelamin="laki-laki";
$ipk=3.45;

$data ="$nama $alamat $jenis_kelamin $ipk" ;
echo $data;
echo "<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <tr>
        <td>nama</td>
        <td>:</td>
        <td><?= "$nama";?></td> <!-- tag halaman tersebut bisa kita isi dengan tag php dan variable -->
    </tr>
    <tr>
        <td>alamat</td>
        <td>:</td>
        <td><?="$alamat"; ?></td>
    </tr>
    
</body>
</html>