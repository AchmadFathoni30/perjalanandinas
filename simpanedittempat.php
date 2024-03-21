<?php
include "koneksi.php";
if (isset($_POST['btnSave'])) {

$kd_tempat		= $_POST['kd_tempat'];
$nama_tempat	= $_POST['nama_tempat'];	
$tarif_tempat	= $_POST['tarif_tempat'];

$sql = "UPDATE tempat SET kd_tempat='$kd_tempat', nama_tempat='$nama_tempat', tarif_tempat='$tarif_tempat' WHERE kd_tempat='$kd_tempat'";
$query = mysqli_query($db,$sql);
	if ($query) {
		echo "<script>alert('data berhasil disimpan');
		document.location.href='tempat.php'</script>\n";
	} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='edittempat.php'</script>\n";
	}
		mysqli_close();
	}
?>