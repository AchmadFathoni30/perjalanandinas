<?php 
include 'koneksi.php';
mysqli_query($db,"DELETE from dasar WHERE kd_dasar='$_GET[kd_dasar]'");
echo "<script>alert('data berhasil dihapus');
		document.location.href='tdasar.php'</script>\n";
?>