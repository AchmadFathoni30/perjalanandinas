<?php 
session_start();
include "koneksi.php";
?>
<?php
if (isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$login=mysqli_query($db,"SELECT * FROM user WHERE username='$username' and password='$password'");
	$result=mysqli_fetch_array($login);
	$nama_lengkap=$result['nama_lengkap'];

	if ($result['role']=="admin") 
	{
		$_SESSION['admin']=$result['kd_user'];
		echo "<script>alert('Selamat datang $nama_lengkap');
		window.location='admin.php';
		</script>";
	}
	elseif($result['role']=="pegawai")
	{
		$_SESSION['pegawai']=$result['kd_user'];
		echo "<script>alert('Selamat datang $nama_lengkap');
		window.location='pegawai.php';
		</script>";
	}
	else{
		echo "<script>alert('Salah username/password cuy')
		window.location='login.php';
		</script>";
	}
}

?>