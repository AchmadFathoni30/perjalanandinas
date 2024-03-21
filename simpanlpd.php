<?php include"koneksi.php";
if (isset($_POST['btnSave'])) {

	$no_spt				=$_POST['no_spt'];
	$kd_dasar			=$_POST['kd_dasar'];
	$kd_user			=$_POST['kd_user'];
	$kd_jabatan			=$_POST['kd_jabatan'];
	$kd_tempat			=$_POST['kd_tempat'];
	$kd_tujuan			=$_POST['kd_tujuan'];
	$dalam_rangka		=$_POST['dalam_rangka'];
	$lamanya			=$_POST['lamanya'];
	$tgl_berangkat		=$_POST['tgl_berangkat'];
	$tgl_kembali		=$_POST['tgl_kembali'];
	$tgl_keluar			=$_POST['tgl_keluar'];
	$status				=$_POST['status'];
	$tempat_keluar		=$_POST['tempat_keluar'];
	$hasil_perjalanan	=$_POST['hasil_perjalanan'];
	$tempat_laporan		=$_POST['tempat_laporan'];
	$tgl_laporan		=$_POST['tgl_laporan'];

$sql="UPDATE spt SET no_spt='$no_spt', status='$status', hasil_perjalanan='$hasil_perjalanan', tempat_laporan='$tempat_laporan', tgl_laporan='$tgl_laporan' WHERE no_spt='$no_spt'";

	$query = mysqli_query($db,$sql);
	if ($query) {
		echo "<script>alert('data berhasil disimpan');
		document.location.href='tlpdpegawai.php'</script>\n";
	} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='tlpdpegawai.php'</script>\n";
	}
		mysqli_close();
	}
?>