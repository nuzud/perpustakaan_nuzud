<?php
include ("koneksi.php");

 $username = $_POST['username'];
 $password = $_POST['password'];
 $tipe = $_POST['tipe'];

mysqli_query($conn,"insert into login values
('$username','$password','$tipe')");

// // <?php
//   if (isset($_POST['submit'])) {
//    $data = implode(",", $_POST['hobi']);
//    mysqli_query($conn,"INSERT into mahasiswa VALUES('$nim','$nama','$jk','$semester','$fakultas','$jurusan','$hobi')");   
//   }
//   $i=1;
//   $sql=mysqli_query("SELECT * FROM mahasiswa");
//   while ($data=mysqli_fetch_array($sql)){
//     $i++;
//     $hobi;
//   }
header("location:daftar.php");
?>