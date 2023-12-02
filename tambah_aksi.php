<?php

include 'koneksi.php';

$nama= $_POST['nama']; 
$nim =$_POST['nim'];
$alamat = $_POST['alamat'];

mysqli_query ($konek, "INSERT into siswa values('','$nama', '$nim', '$alamat')");

header("location:index.php");
?>