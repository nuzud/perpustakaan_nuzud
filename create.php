<?php
include ("koneksi.php");

 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jk = $_POST['jk'];
 $semester = $_POST['semester'];
 $fakultas = $_POST['fakultas'];
 $jurusan = $_POST['jurusan'];

 $hobi =implode(", ", $_POST["hobi"]);

mysqli_query($conn,"insert into mahasiswa values
('$nim','$nama','$jk','$semester','$fakultas','$jurusan','$hobi')");

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
header("location:form_create.php");
?>