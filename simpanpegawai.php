<?php 
include"koneksi.php";
if (isset($_POST['btnSave'])) {
	$nip			=$_POST['nip'];
	$username		=$_POST['username'];
	$password		=$_POST['password'];
	$nama_lengkap	=$_POST['nama_lengkap'];
	$golongan		=$_POST['golongan'];
	$kd_jabatan		=$_POST['kd_jabatan'];
	$role			=$_POST['role']; 

$query = mysqli_query($db,"insert into user(nip, username, password, nama_lengkap, golongan, kd_jabatan, role) values ('$nip','$username','$password','$nama_lengkap','$golongan','$kd_jabatan','$role')");

	if ($query) {
		echo "<script>alert('data berhasil disimpan');
		document.location.href='tpegawai.php'</script>\n";
			} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='formpegawai.php'</script>\n";
		}
	}
mysqli_close();
?>