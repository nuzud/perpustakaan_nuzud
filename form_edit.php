<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>PERPUSTAKAAN</title>
<body background="kartun.png">


<?php
include ("koneksi.php");

$data = $_GET['nim'];
$edit = "SELECT * FROM mahasiswa WHERE nim='$data'";
$proses = mysqli_query($conn, $edit);
$row = mysqli_fetch_array($proses);
$checked = explode(',', $row['hobi']);
?>

<h1 align = "center">EDIT DATA MAHASISWA</h1></br>

<div class="container">
  <form method="POST" action="edit.php">
  <div class="mb-3">
    <label class="form-label">NIM</label>
    <input type="text" class="form-control" name = "nim" value="<?php echo $row[0] ?>" Required>
  </div>

  <div class="mb-3">
  <label  class="form-label">Nama Mahasiswa</label>
  <textarea class="form-control" class="form-label" name="nama" Required> <?php echo   $row[1] ?> </textarea>
</div>
<div class="mb-3">
         <label class="form-label">Jenis Kelamin</label>
         <div class="form-check">
            <input class="form-check-input" <?= $row[2] == 'Laki-Laki'? 'checked' : '' ?> type="radio" name="jk" id="flexRadioDefault1" value="Laki-Laki">
            <label class="form-check-label" for="flexRadioDefault1">Laki-Laki</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" <?= $row[2] == 'Perempuan'? 'checked' : '' ?> type="radio" name="jk" id="flexRadioDefault2" value="Perempuan">
            <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
         </div>
      </div>
  <div class="mb-3">
    <label class="form-label">Semester</label>
    <input type="text" class="form-control" name = "semester" value="<?php echo $row[3] ?>" Required>
  </div>
  <div class="mb-3">
    <label class="form-label">Fakultas</label>
    <select class="form-control" name = "fakultas" value="<?php echo $row[4] ?>" Required>
      <option <?= $row[4]=='FTI' ?'selected':'' ?>>FTI</option>
      <option <?= $row[4]=='FEB' ?'selected':'' ?>>FEB</option>
      <option <?= $row[4]=='FISIP'?'selected':'' ?>>FISIP</option>     
      <option <?= $row[4]=='FH'?'selected':'' ?>>FH</option>
      <option <?= $row[4]=='FP'?'selected':'' ?>>FP</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" class="form-control" name = "jurusan" value="<?php echo $row[5] ?>" Required>
  </div>
  <div class="mb-3">
    <label class="form-label" Required>Hobi :</label>
  </div>
  <div class="form-check">
    <label class="form-check-label">  
    <input class="form-check-input" type="checkbox" value = "Membaca" name = "hobi[]" <?= in_array('Membaca',$checked)? 'checked' : '' ?> >
      Membaca
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Menulis" name = "hobi[]" <?= in_array('Menulis',$checked)? 'checked' : '' ?> >
    <label class="form-check-label">
      Menulis
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Memasak" name = "hobi[]" <?= in_array('Memasak',$checked)? 'checked' : '' ?> >
    <label class="form-check-label">
      Memasak
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Olah Raga" name = "hobi[]" <?= in_array('Olah Raga',$checked)? 'checked' : '' ?> >
    <label class="form-check-label">
      Olah Raga
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Bermain Game" name = "hobi[]" <?= in_array('Bermain Game',$checked)? 'checked' : '' ?>>
    <label class="form-check-label">
      Bermain Game
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value = "Tidur" name = "hobi[]" <?= in_array('Tidur',$checked)? 'checked' : '' ?>>
    <label class="form-check-label">
      Tidur
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
  </div>
</html>