<?php 
include 'koneksi.php';
mysqli_query($db,"DELETE from tujuan WHERE kd_tujuan='$_GET[kd_tujuan]'");
echo "<script>alert('data berhasil dihapus');
		document.location.href='tujuan.php'</script>\n";
?>