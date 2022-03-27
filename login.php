<html>
<head>
	<title>Login</title>
</head>
<body background="bg3.jpg">
<h1 align="center"><br>SELAMAT DATANG DI PERPUSTAKAAN</h1><br><p>
	<form action="proseslogin.php" method="post">
		<table border="0" align="center" bgcolor="#dcdcdc" cellpadding="20">
			<tr>
				<td>
					<input type="text" name="username" placeholder="Username or Email..">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="password" placeholder="Password..">
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<input type="text" name="input" placeholder="Verification Code..">
					<input type="text" name="captcha" <?php
						$no = rand(123456789,0);
						$a = substr($no,0,4);
					?> value="<?php echo $a;?>" style="font-size:50px;width:150px;" readonly>
				</td>
			</tr>
			<tr>
				<td height="50" colspan="6" align="center">
					<input type="submit" value="Login">
					<br>
					<br>
					<a href ="daftar.php" type="button" >Belum punya akun? Silahkan daftar</a>
				</td>
			</tr>
		</table>
  
	</form>
</body>
</html>