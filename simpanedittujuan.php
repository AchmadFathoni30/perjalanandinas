<?php
include "koneksi.php";
if (isset($_POST['btnSave'])) {

$nama_tujuan	= $_POST['nama_tujuan'];
$kd_tujuan		= $_POST['kd_tujuan'];
$tarif_transport		= $_POST['tarif_transport'];

$sql = "UPDATE tujuan SET nama_tujuan='$nama_tujuan', kd_tujuan='$kd_tujuan', tarif_transport='$tarif_transport' WHERE kd_tujuan='$kd_tujuan'";
$query = mysqli_query($db,$sql);
	if ($query) {
		echo "<script>alert('data berhasil disimpan');
		document.location.href='tujuan.php'</script>\n";
	} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='edittujuan.php'</script>\n";
	}
		mysqli_close();
	}
?>