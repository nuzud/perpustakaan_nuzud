<?php 
include "koneksi.php";
mysqli_query($conn,"delete from mahasiswa where nim='$_GET[nim]'");
header('location:read.php');
?>