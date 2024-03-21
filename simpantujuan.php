<?php 
include"koneksi.php";
if (isset($_POST['btnSave'])) {
	$nama_tujuan			=$_POST['nama_tujuan'];
	$tarif_transport		=$_POST['tarif_transport'];

$query = mysqli_query($db,"insert into tujuan(nama_tujuan, tarif_transport) values ('$nama_tujuan','$tarif_transport')");

	if ($query) {
		echo "<script>alert('data berhasil disimpan');
		document.location.href='tujuan.php'</script>\n";
			} else {
		echo "<script>alert('data gagal disimpan');
		document.location.href='formtujuan.php'</script>\n";
		}
	}
mysqli_close();
?>