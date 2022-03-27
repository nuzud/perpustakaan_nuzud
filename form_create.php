<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>PERPUSTAKAAN</title>
<body background="kartunn.png">

  <h1><center>TAMBAH DATA MAHASISWA</center></h1></br>
  
  
  <div class="container">
  <form method = "POST" action = "create.php">
  <div class="mb-3">
    <label class="form-label">NIM</label>
    <input type="text" class="form-control" name = "nim" Required>
  </div>
  <div class="mb-3">
  <label  class="form-label">Nama Mahasiswa</label>
  <textarea class="form-control" class="form-label" name="nama" Required>
  </textarea>
  <div class="mb-3">
         <label class="form-label">Jenis Kelamin</label>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Laki-Laki">
            <label class="form-check-label" for="flexRadioDefault1">Laki-Laki</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault2" value="Perempuan">
            <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
         </div>
      </div>
  <div class="mb-3">
    <label class="form-label">Semester</label>
    <input type="text" class="form-control" name = "semester" Required>
  </div>
  <div class="mb-3">
    <label>Fakultas</label>
    <select name = "fakultas" class="form-control">
      <option>FTI</option>
      <option>FEB</option>
      <option>FISIP</option>
      <option>FH</option>
      <option>FP</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" class="form-control" name = "jurusan" Required>
  </div>
  <div class="mb-3">
    <label class="form-label">Hobi :</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Membaca" name = "hobi[]">
    <label class="form-check-label">
      Membaca
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Menulis" name = "hobi[]">
    <label class="form-check-label">
      Menulis
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Memasak" name = "hobi[]">
    <label class="form-check-label">
      Memasak
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Olah Raga" name = "hobi[]">
    <label class="form-check-label">
      Olah Raga
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Bermain Game" name = "hobi[]">
    <label class="form-check-label">
      Bermain Game
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Tidur" name = "hobi[]">
    <label class="form-check-label">
      Tidur
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button href = "read.php">Lihat Data Mahasiswa</button>
</form>
  </div>
</body>
</html>