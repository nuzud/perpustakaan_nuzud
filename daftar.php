<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>PERPUSTAKAAN</title>
<body background="kartunn.png">

  <h1><center>TAMBAH DATA MAHASISWA</center></h1></br>
  
  
  <div class="container">
  <form method = "POST" action = "proses_daftar.php">
  <div class="mb-3">
    <label class="form-label">USERNAME</label>
    <input type="text" class="form-control" name = "username">
  </div><div class="mb-3">
    <label class="form-label">PASSWORD</label>
    <input type="text" class="form-control" name = "password">
  </div>

  <div class="mb-3">
    <label>TIPE</label>
    <select name = "tipe" class="form-control">
      <option>admin</option>
      <option>user</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
<a href ="login.php" type="button" >Silahkan Login</a>
  </div>
</body>
</html>