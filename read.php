<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Perpustakaan</title>
<body background = "59.png">
  <div class="container">
	<center>
    <h1>DATA MAHASISWA</h1></br>
	<form method = "POST" action = "logout.php">
    <nav>
    <input type = "submit" name = "logout" value = "Logout">
    </nav>
    <form method = "POST" action = "form_create.php">
    <nav>
    <input type = "button" onClick="window.location='form_create.php'" name = "tambah" value = "Tambah Data">
    </nav>

	

    <table class="table" >
	<br>
	  <tr>
	    <th>NIM</th>
		<th>Nama Mahaiswa</th>
		<th>Jenis Kelamin</th>
		<th>Semester</th>
		<th>Fakultas</th>
		<th>Jurusan</th>
		<th>Hobi</hobi>
        <th></th>
	  </tr>

<?php include("koneksi.php");
if($conn){
$hasil = mysqli_query($conn,"SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_array($hasil))
{
	echo "<tr>
		  <td>$row[nim]</td>
		  <td>$row[nama]</td>
		  <td>$row[jk]</td>
	      <td>$row[semester]</td>
          <td>$row[fakultas]</td>
		  <td>$row[jurusan]</td>
		  <td>$row[hobi]</td>
		  <td><button href=form_edit.php?nim=$row[nim]>Ubah</button>
		  <button href=delete.php?nim=$row[nim]>Hapus</button>
		  
		  </tr>";

	$row=mysqli_query($conn,"select * from mahasiswa where nim='$row[nim]'");
}
}
?>
  </div>
</body>
</html>