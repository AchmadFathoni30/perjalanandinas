<?php
include "koneksi.php";
if (isset($_POST['btnSave'])) {

$nip			= $_POST['nip'];
$kd_user		= $_POST['kd_user'];
$username		= $_POST['username'];	
$password		= $_POST['password'];
$nama_lengkap	= $_POST['nama_lengkap'];
$golongan		= $_POST['golongan'];
$kd_jabatan		= $_POST['kd_jabatan'];

$sql = "UPDATE user SET nip='$nip', kd_user='$kd_user', username='$username', password='$password', nama_lengkap='$nama_lengkap', golongan='$golongan', kd_jabatan='$kd_jabatan' WHERE kd_user='$kd_user'";
$query = mysqli_query($db,$sql);
	if ($query) {
		echo "<script>alert('data berhasil disimpan');
		document.location.href='tpegawai.php'</script>\n";
	} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='tpegawai.php'</script>\n";
	}
		mysqli_close();
	}
?>