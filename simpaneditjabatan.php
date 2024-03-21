<?php
include "koneksi.php";
if (isset($_POST['btnSave'])) {

$nama_jabatan	= $_POST['nama_jabatan'];
$kd_jabatan		= $_POST['kd_jabatan'];
$uang_harian	= $_POST['uang_harian'];

$sql = "UPDATE jabatan SET nama_jabatan='$nama_jabatan', kd_jabatan='$kd_jabatan', uang_harian='$uang_harian' WHERE kd_jabatan='$kd_jabatan'";
$query = mysqli_query($db,$sql);
	if ($query) {
		echo "<script>alert('data berhasil disimpan');
		document.location.href='tjabatan.php'</script>\n";
	} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='editjabatan.php'</script>\n";
	}
		mysqli_close();
	}
?>