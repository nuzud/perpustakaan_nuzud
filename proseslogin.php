<?php include "koneksi.php";?>
<?php 
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$tipe = $_POST['tipe'];
	$cap = $_POST['captcha'];
	$input = $_POST['input'];
	
	if ($input == $cap){
		session_start();
		$q = "select * from login where username='$user' && password='$pass'";
		$proses = mysqli_query($conn,$q);
		$row = mysqli_num_rows($proses);
		if ($row > 0){
			session_start();
			$_SESSION['username'] = $user;
				if ($tipe ='admin'){
					echo "<script>alert('Anda Login Sebagai Admin!!')
					location.replace('read.php')</script>";
				
				}else if ($tipe ='user'){
					echo "<script>alert('Anda Login Sebagai User!!')
					location.replace('user.php')</script>";
				}else{
					echo "<script>alert('Anda Tidak Punya Akses')
					location.replace('index.php')</script>";
				}
		}else{
			echo "<script>alert('Anda tidak punya akun, silahkan daftar terlebih dahulu')
			location.replace('daftar.php')</script>";
		}
	}else{
		echo "<script>alert('Login Gagal, Data Anda Tidak Valid?!')
		location.replace('index.php')</script>";
	}
?>