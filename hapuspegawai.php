<?php 
include 'koneksi.php';
mysqli_query($db,"DELETE from user WHERE kd_user='$_GET[kd_user]'");
echo "<script>alert('data berhasil dihapus');
		document.location.href='tpegawai.php'</script>\n";
?>