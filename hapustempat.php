<?php 
include 'koneksi.php';
mysqli_query($db,"DELETE from tempat WHERE kd_tempat='$_GET[kd_tempat]'");
echo "<script>alert('data berhasil dihapus');
		document.location.href='tempat.php'</script>\n";
?>