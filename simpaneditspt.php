<?php 
	include "koneksi.php";
	if (isset($_POST['btnSave'])) {

		$no_spt				=$_POST['no_spt'];
		$kd_user			=$_POST['kd_user'];
		$kd_jabatan			=$_POST['kd_jabatan'];
		$kd_tempat			=$_POST['kd_tempat'];
		$kd_tujuan			=$_POST['kd_tujuan'];
		$kd_dasar			=$_POST['kd_dasar'];
		$dalam_rangka		=$_POST['dalam_rangka'];
		$lamanya			=$_POST['lamanya'];
		$tgl_berangkat		=$_POST['tgl_berangkat'];
		$tgl_kembali		=$_POST['tgl_kembali'];
		$tempat_keluar		=$_POST['tempat_keluar'];
		$tgl_keluar			=$_POST['tgl_keluar'];
		$status				=$_POST['status'];

		$sql="UPDATE spt SET no_spt='$no_spt', kd_user='$kd_user', kd_jabatan='$kd_jabatan', kd_tempat='$kd_tempat
		', kd_tujuan='$kd_tujuan', kd_dasar='$kd_dasar', dalam_rangka='$dalam_rangka', lamanya='$lamanya', tgl_berangkat='$tgl_berangkat', tgl_kembali='$tgl_kembali', tempat_keluar='$tempat_keluar', tgl_keluar='$tgl_keluar', status='$status' WHERE no_spt='$no_spt'";
		$query=mysqli_query($db,$sql);
		if ($query) {
		echo "<script>alert('data berhasil disimpan');
		document.location.href='tspt.php'</script>\n";
	} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='editspt.php'</script>\n";
	}
		mysqli_close();
	}
?>