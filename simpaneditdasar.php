<?php
include "koneksi.php";
if (isset($_POST['btnSave'])) {

$kd_dasar		= $_POST['kd_dasar'];
$nama_dasar		= $_POST['nama_dasar'];	
$tgl_dasar		= $_POST['tgl_dasar'];
$no_dasar		= $_POST['no_dasar'];
$peruntukan		= $_POST['peruntukan'];

$sql = "UPDATE dasar SET kd_dasar='$kd_dasar', nama_dasar='$nama_dasar', tgl_dasar='$tgl_dasar', no_dasar='$no_dasar', peruntukan='$peruntukan' WHERE kd_dasar='$kd_dasar'";
$query = mysqli_query($db,$sql);
	if ($query) {
		echo "<script>alert('data berhasil disimpan');
		document.location.href='tdasar.php'</script>\n";
	} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='editdasar.php'</script>\n";
	}
		mysqli_close();
	}
?>